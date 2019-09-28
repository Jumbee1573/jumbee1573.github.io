import express from 'express';
import mongoose from 'mongoose';
import session from 'express-session';
import crypto from 'crypto';

import User from '../Models/User';

import { 
    SESSION_LIFETIME,
    IN_PROD,
    SESSION_NAME,
    SESSION_SECRET
} from '../constants.js';

const userRouter = express.Router();

mongoose.connect('mongodb://localhost/resumeHunter', {
    useCreateIndex: true,
    useNewUrlParser: true
}).then(() => console.log('DB connected'));

userRouter.use(session({
    name: SESSION_NAME,
    resave: false,
    saveUninitialized: false,
    secret: SESSION_SECRET,
    cookie: {
        httpOnly: false,
        maxAge: SESSION_LIFETIME,
        sameSite: true,
        secure: IN_PROD
    }
}));

const hash = (text) => {
	return crypto.createHash('sha1')
	.update(text).digest('base64')
}

userRouter.post('/api/register', (req, res, next) => {
    const { username, password, confirmPassword } = req.body;

    if (req.session.userId) {
        return res.send({ status: "You're already logged in" })
    } else {
        if(password === confirmPassword) {
            User.findOne({ username }).then(user => {
                if(!user) {
                    const user = new User({
                        username,
                        password: hash(password)
                    });
                    
                    user.save().then(() => res.send({ status: "You successfully registered" }));
            
                } else {
                    res.send({ status: "This username already exist" });
                }
            });
        } else {
            return res.send({ status: "Passwords don't match"});
        }
    }
});

userRouter.post('/api/login', (req, res, next) => {
    const { username, password } = req.body;

    if (req.session.userId) {
        return res.send({ status: "You're already logged in" })
    } else {
        User.findOne({ username }).then(user => {
            if(!user) {
                res.send({ status: "Login or password is incorrect" })
            } else if(user.password == hash(password)) {
                req.session.userId = user._id;
                res.send({ status: "Successfull" });
            } else {
                res.send({ status: "Login or password is incorrect" });
            }
        });
    }
});

userRouter.post('/api/logout', (req, res, next) => {
    if(req.session.userId) {
        res.clearCookie('sid');
        res.send({ status: "cleared" });
    }
});

userRouter.get('/cookies', (req, res, next) => {
    return res.send(req.session.userId ? { status: true } : { status: false });
});

export { userRouter };