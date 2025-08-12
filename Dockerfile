FROM php:8.1-apache

ENV PORT=8080
EXPOSE 8080

# Cloud Run用Apache設定
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf \
 && echo "ServerName localhost" >> /etc/apache2/apache2.conf

# .htaccess対応とmod_rewrite
RUN a2enmod rewrite \
 && sed -i "s/AllowOverride None/AllowOverride All/" /etc/apache2/apache2.conf

# /var/www/html にアクセス許可
RUN printf '%s\n' \
  '<Directory /var/www/html>' \
  '    Options Indexes FollowSymLinks' \
  '    AllowOverride All' \
  '    Require all granted' \
  '</Directory>' >> /etc/apache2/apache2.conf

# ファイル配置
COPY . /var/www/html

# パーミッション
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html
 
 
FROM node:20-alpine AS deps
 WORKDIR /app
 COPY package.json package-lock.json* ./
 RUN npm ci --omit=dev
 
 FROM node:20-alpine AS build
 WORKDIR /app
 COPY . .
 RUN npm ci && npm run build
 
 FROM node:20-alpine
 WORKDIR /app
 ENV NODE_ENV=production
 COPY --from=deps /app/node_modules ./node_modules
 COPY --from=build /app/dist ./dist
 # 静的/HTML をそのままルートにコピー
 COPY _assets ./_assets
 COPY index2.html ./index2.html
 EXPOSE 8080
 CMD ["node", "dist/server.js"]