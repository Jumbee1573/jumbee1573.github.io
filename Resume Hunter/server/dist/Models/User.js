'use strict';

Object.defineProperty(exports, "__esModule", {
    value: true
});

var _mongoose = require('mongoose');

var _mongoose2 = _interopRequireDefault(_mongoose);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var userModel = new _mongoose.Schema({
    username: {
        type: String,
        unique: true,
        required: true,
        minLength: 5
    },
    password: {
        type: String,
        required: true,
        minLength: 5
    }
});

var User = _mongoose2.default.model('User', userModel);

exports.default = User;