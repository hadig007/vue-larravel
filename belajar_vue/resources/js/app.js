
window.Vue = require('vue').default;

import Vue from 'vue/dist/vue.js';
import VueRouter from 'vue-router'
Vue.use('Vue')
Vue.use(VueRouter)

Vue.component('app-component', require('./components/App.vue').default);
// import routers from './router.js'


import Home from './components/Home.vue'
import About from './components/About.vue'

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
    }
];


const router = new VueRouter({
    mode: 'history',
    routes
    
})


const app = new Vue({
    el: '#app',
    router
});
