
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



window.Vue = require('vue');
import Toaster from 'v-toaster'
import 'v-toaster/dist/v-toaster.css'
Vue.use(Toaster, {timeout: 5000});


Vue.component('chat-app', require('./components/ChatApp.vue'));

const app = new Vue({
    el: '#app'
});



Vue.component('nav-app', require('./components/Nav.vue'));

const Nav = new Vue({
    el: '#test'
});




