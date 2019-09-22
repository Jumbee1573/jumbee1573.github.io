'use strict';

var _express = require('express');

var _express2 = _interopRequireDefault(_express);

var _bodyParser = require('body-parser');

var _bodyParser2 = _interopRequireDefault(_bodyParser);

var _cors = require('cors');

var _cors2 = _interopRequireDefault(_cors);

var _UserApi = require('./Api/UserApi');

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var app = (0, _express2.default)();
var port = process.env.PORT || 5000;

app.use((0, _cors2.default)({
    origin: ['http://localhost:3000'],
    methods: ["GET,HEAD,PUT,DELETE,PATCH,POST,OPTIONS"],
    credentials: true,
    preflightContinue: true
}));
app.use(_bodyParser2.default.urlencoded({ extended: true }));
app.use(_bodyParser2.default.json());

app.use(_UserApi.userRouter);

app.listen(port, function () {
    return console.log('Listening on port: ' + port);
});