

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
    },
];


export default routes;