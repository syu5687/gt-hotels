import express from "express";
import path from "node:path";
import cors from "cors";

const app = express();
app.disable("x-powered-by");
app.use(cors({ origin: true }));
app.use(express.json({ limit: "1mb" }));

// 静的配信
app.use("/_assets", express.static(path.join(process.cwd(), "_assets"), { maxAge: "7d", immutable: true }));
app.use("/", express.static(path.join(process.cwd(), "public"), { maxAge: "1h" }));

// API
import translateRoute from "./routes/translate.js";
app.use("/api/translate", translateRoute);

// 健康チェック
app.get("/healthz", (_, res) => res.send("ok"));

const port = process.env.PORT || 8080;
app.listen(port, () => console.log(`Listening on http://0.0.0.0:${port}`));