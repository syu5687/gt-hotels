# 依存のみインストール（dev除外）
FROM node:20-alpine AS deps
WORKDIR /app
COPY package.json package-lock.json* ./
# lock がないなら ↓を `npm install --omit=dev` に変更
RUN npm ci --omit=dev

# TypeScript ビルド
FROM node:20-alpine AS build
WORKDIR /app
COPY . .
# lock がないなら ↓を `npm install && npm run build` に変更
RUN npm ci && npm run build

# 本番ランタイム
FROM node:20-alpine
WORKDIR /app
ENV NODE_ENV=production
# 実行に必要なものだけコピー
COPY --from=deps /app/node_modules ./node_modules
COPY --from=build /app/dist ./dist
COPY _assets ./_assets
COPY index.html ./index.html        # ← index2.html ではなく index.html に合わせる
EXPOSE 8080
CMD ["node", "dist/server.js"]