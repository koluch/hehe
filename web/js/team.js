!function e(n,t,r){function o(i,a){if(!t[i]){if(!n[i]){var c="function"==typeof require&&require;if(!a&&c)return c(i,!0);if(u)return u(i,!0);var s=new Error("Cannot find module '"+i+"'");throw s.code="MODULE_NOT_FOUND",s}var f=t[i]={exports:{}};n[i][0].call(f.exports,function(e){var t=n[i][1][e];return o(t?t:e)},f,f.exports,e,n,t,r)}return t[i].exports}for(var u="function"==typeof require&&require,i=0;i<r.length;i++)o(r[i]);return o}({"/var/www/site/js/entry-team.js":[function(e,n,t){"use strict";var r=e("redux"),o=e("./redux-dom-binding"),u=e("functional-utils");e("is-nan").shim();var i={value:1e3,focused:!1},a=function(){var e=arguments.length<=0||void 0===arguments[0]?i:arguments[0],n=arguments[1];switch(n.type){case"DOM_FOCUS":return(0,u.merge)(e,{focused:!0});case"DOM_BLUR":return(0,u.merge)(e,{focused:!1});case"DOM_INPUT":var t=Number(n.text);return Number.isNaN(t)?e:(0,u.merge)(e,{value:t});default:return e}};document.addEventListener("DOMContentLoaded",function(){Array.prototype.slice.apply(document.querySelectorAll(".common-donation")).forEach(function(e){var n=e.querySelector(".common-donation_form"),t=e.querySelector(".common-donation_tips"),u=e.querySelector(".common-donation_amount"),i=e.querySelector(".common-donation_donate-button"),c=n.querySelector("input[name=sum]"),s=(0,r.createStore)(a),f=function(){var e=s.getState(),n=e.value,r=e.focused,o=.005,a=n-n*(o/(1+o)),f=n-a;u.value=n+(r?"":" ₽"),i.disabled=!(n>0),t.innerText="Будет переведено "+a.toFixed(2)+" ₽ (комиссия "+f.toFixed(2)+" ₽)",c.value=n};s.subscribe(f),f(),(0,o.bindEvents)(u,["input","focus","blur"],s)})})},{"./redux-dom-binding":"/var/www/site/js/redux-dom-binding.js","functional-utils":"functional-utils","is-nan":"is-nan",redux:"redux"}],"/var/www/site/js/redux-dom-binding.js":[function(e,n,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var r=["input","focus","blur"],o={};r.forEach(function(e){o[e]=function(){switch(e){case"input":return function(e){return{type:"DOM_INPUT",text:e.target.value}};case"focus":return function(e){return{type:"DOM_FOCUS"}};case"blur":return function(e){return{type:"DOM_BLUR"}};default:throw new Error("Unsupported event: "+e)}}()});var u={};r.forEach(function(e){var n=o[e];u[e]=function(t,r){t.addEventListener(e,function(e){r.dispatch(n(e))})}});t.bindEvents=function(e,n,t){var r="string"==typeof n?n.split(" "):n,o="length"in e?Array.prototype.slice.apply(e):[e];o.forEach(function(e){r.forEach(function(n){if(!(n in u))throw new Error("Undefined event type: "+n);var r=u[n];r(e,t)})})}},{}]},{},["/var/www/site/js/entry-team.js"]);