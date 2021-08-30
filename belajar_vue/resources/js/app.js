
window.Vue = require('vue').default;
window.axios = require('axios');

import Vue from 'vue/dist/vue.js';
import VueRouter from 'vue-router'
Vue.use('Vue')
const axios = require('axios');
Vue.use(VueRouter)

Vue.component('app-component', require('./components/App.vue').default);
// import routers from './router.js'


import Home from './components/pages/Home.vue'
import About from './components/pages/About.vue'
import Services from './components/pages/Services.vue'
import Contact from './components/pages/Contact.vue'

const routes =[ 
    {
    path : '/home',
    component: Home,
    name: 'home'
    },
    {
    path : '/about',
    component: About,
    name:'about'
    },
    {
    path : '/services',
    component: Services,
    name: 'services'
    },
    {
    path : '/contact',
    component: Contact,
    name:'contact'
    },
];


const router = new VueRouter({
    mode: 'history',
    routes
    
})


const app = new Vue({
    el: '#app',
    router
});
