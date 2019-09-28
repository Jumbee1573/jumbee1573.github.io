import express from 'express';
import bodyParser from 'body-parser';
import cors from 'cors';

import { userRouter } from './Api/UserApi';

const app = express();
const port = process.env.PORT || 5000;

app.use(cors({
    origin:['http://localhost:3000'],
    methods: ["GET,HEAD,PUT,DELETE,PATCH,POST,OPTIONS"],
    credentials: true,
    preflightContinue: true
}));
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.use(userRouter);

app.listen(port, () => console.log(`Listening on port: ${port}`));