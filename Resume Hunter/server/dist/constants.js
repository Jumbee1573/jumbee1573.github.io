'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
var SESSION_LIFETIME = exports.SESSION_LIFETIME = 1000 * 60 * 60 * 2;
var NODE_ENV = exports.NODE_ENV = 'development';
var SESSION_NAME = exports.SESSION_NAME = 'sid';
var SESSION_SECRET = exports.SESSION_SECRET = 'ssh!quiet,it\'asecret!';
var IN_PROD = exports.IN_PROD = NODE_ENV === 'production';