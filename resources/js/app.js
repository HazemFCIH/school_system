require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import Home from './components/Home.vue';
import Login from './components/Login.vue';

import App from './App.vue';
import VueAxios from 'vue-axios';
import axios from 'axios';
import Vue from 'vue';
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


}

];
const router = new VueRouter({mode : 'history',routes : routes});
const app = new Vue(Vue.util.extend({router},App)).$mount('#app');
