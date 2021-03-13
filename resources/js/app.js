require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import Home from './components/Home.vue';
import Login from './components/LoginForm.vue';
import Register from './components/RegisterForm.vue';


import App from './App.vue';
import VueAxios from 'vue-axios';
import axios from 'axios';
import Vue from 'vue';
import store from "./store"
Vue.use(VueAxios,axios);
const routes = [
{

    name:'/',
    path:'/',
    component:Home
},
{
    name:'/login',
    path:'/login',
    component:Login


},
{
name: '/register',
path: '/register',
component:Register

}

];

Vue.component('login-form',require('./components/LoginForm.vue').default)
Vue.component('register-form',require('./components/RegisterForm.vue').default)

const router = new VueRouter({mode : 'history',routes : routes});
const app = new Vue(Vue.util.extend({router,store})).$mount('#app');
