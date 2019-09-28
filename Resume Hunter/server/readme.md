import express from 'express';
import bodyParser from 'body-parser';
import cors from 'cors';
// import mongoose from 'mongoose';
// import session from 'express-session';
// import crypto from 'crypto';
import {userRouter} from './Api/UserApi';
// // ...
// app.use(router);

// const MongoStore = require('connect-mongo')(session);

// import User from './Models/User';

const app = express();
const port = process.env.PORT || 5000;
// mongoose.connect('mongodb://localhost/resumeHunter', {
// useCreateIndex: true,
// useNewUrlParser: true
// }).then(() => console.log('DB connected'));

// const db = mongoose.connection;

app.use(cors());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());
app.use(userRouter);
// app.use(session({
// secret: 'The best work',
// resave: false,
// saveUninitialized: false,
// store: new MongoStore({ mongooseConnection: db })
// }));

// function hash (text) {
// return crypto.createHash('sha1')
// .update(text).digest('base64')
// }

// app.post('/register', (req, res, next) => {
// const { username, password } = req.body;

// User.findOne({ username }).then(user => {
// if(!user) {
// const user = new User({
// username,
// password: hash(password)
// });

// user.save().then(() => res.send({ status: "User created" }));
// } else {
// res.send({ status: "This username already exist" });
// }
// });
// });

// app.post('/login', (req, res, next) => {
// const { username, password } = req.body;

// if (req.session.user) {
// return res.redirect('/');
// } else {
// User.findOne({ username }).then(user => {
// if(!user) {
// return res.send({ status: "Login or password is incorrect" })
// } else if(user.password == hash(password)) {
// req.session.user = {id: user.\_id, username: user.username};
// res.redirect('/');
// } else {
// return res.send({ status: "Login or password is incorrect" });
// }
// });
// }
// });

// app.post('/logout', (req, res, next) => {
// if (req.session.user) {
// req.session.destroy();
// res.redirect('/');
// }
// });

// app.get('/', (req, res, next) => {
// return res.send({ status: "home page" });
// });

app.listen(port, () => console.log(`Listening on port: ${port}`));
