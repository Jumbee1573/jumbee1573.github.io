'use strict';

Object.defineProperty(exports, "__esModule", {
    value: true
});
exports.userRouter = undefined;

var _express = require('express');

var _express2 = _interopRequireDefault(_express);

var _mongoose = require('mongoose');

var _mongoose2 = _interopRequireDefault(_mongoose);

var _expressSession = require('express-session');

var _expressSession2 = _interopRequireDefault(_expressSession);

var _crypto = require('crypto');

var _crypto2 = _interopRequireDefault(_crypto);

var _User = require('../Models/User');

var _User2 = _interopRequireDefault(_User);

var _constants = require('../constants.js');

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var userRouter = _express2.default.Router();

_mongoose2.default.connect('mongodb://localhost/resumeHunter', {
    useCreateIndex: true,
    useNewUrlParser: true
}).then(function () {
    return console.log('DB connected');
});

userRouter.use((0, _expressSession2.default)({
    name: _constants.SESSION_NAME,
    resave: false,
    saveUninitialized: false,
    secret: _constants.SESSION_SECRET,
    cookie: {
        httpOnly: false,
        maxAge: _constants.SESSION_LIFETIME,
        sameSite: true,
        secure: _constants.IN_PROD
    }
}));

var hash = function hash(text) {
    return _crypto2.default.createHash('sha1').update(text).digest('base64');
};

userRouter.post('/api/register', function (req, res, next) {
    var _req$body = req.body,
        username = _req$body.username,
        password = _req$body.password,
        confirmPassword = _req$body.confirmPassword;


    if (req.session.userId) {
        return res.send({ status: "You're already logged in" });
    } else {
        if (password === confirmPassword) {
            _User2.default.findOne({ username: username }).then(function (user) {
                if (!user) {
                    var _user = new _User2.default({
                        username: username,
                        password: hash(password)
                    });

                    _user.save().then(function () {
                        return res.send({ status: "You successfully registered" });
                    });
                } else {
                    res.send({ status: "This username already exist" });
                }
            });
        } else {
            return res.send({ status: "Passwords don't match" });
        }
    }
});

userRouter.post('/api/login', function (req, res, next) {
    var _req$body2 = req.body,
        username = _req$body2.username,
        password = _req$body2.password;


    if (req.session.userId) {
        return res.send({ status: "You're already logged in" });
    } else {
        _User2.default.findOne({ username: username }).then(function (user) {
            if (!user) {
                res.send({ status: "Login or password is incorrect" });
            } else if (user.password == hash(password)) {
                req.session.userId = user._id;
                res.send({ status: "Successfull" });
            } else {
                res.send({ status: "Login or password is incorrect" });
            }
        });
    }
});

userRouter.post('/api/logout', function (req, res, next) {
    if (req.session.userId) {
        res.clearCookie('sid');
        res.send({ status: "cleared" });
    }
});

userRouter.get('/cookies', function (req, res, next) {
    return res.send(req.session.userId ? { status: true } : { status: false });
});

exports.userRouter = userRouter;