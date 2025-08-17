# ---------------------------
# 1) production 依存のみインストール
# ---------------------------
FROM node:20-alpine AS deps
WORKDIR /app
# package.json と lock を拾う（lock が無いリポにも対応）
COPY package*.json ./
# lock があれば npm ci、無ければ npm install
RUN if [ -f package-lock.json ]; then \
      npm ci --omit=dev; \
    else \
      npm install --omit=dev; \
    fi

# ---------------------------
# 2) ビルド（dev依存を含めて TS をコンパイル）
# ---------------------------
FROM node:20-alpine AS build
WORKDIR /app
COPY . .
# lock があれば npm ci、無ければ npm install
RUN if [ -f package-lock.json ]; then \
      npm ci; \
    else \
      npm install; \
    fi \
 && npm run build

# ---------------------------
# 3) 本番ランタイム
# ---------------------------
FROM node:20-alpine
WORKDIR /app
ENV NODE_ENV=production

# 実行に必要な node_modules（prod）だけを採用
COPY --from=deps /app/node_modules ./node_modules

# ビルド成果物と静的ファイルを配置
COPY --from=build /app/dist ./dist
COPY _assets ./_assets
COPY index.html ./index.html

# Cloud Run のポート（$PORT が渡されるが、デフォルト 8080）
EXPOSE 8080

# 起動
CMD ["node", "dist/server.js"]