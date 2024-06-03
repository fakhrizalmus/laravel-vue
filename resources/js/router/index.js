window.Vue = require('vue').default;

import VueRouter from 'vue-router'
Vue.use(VueRouter)

const Home = require('../pages/Home.vue').default
const About = require('../pages/About.vue').default
import NotFound from '../pages/NotFound.vue';
import User from '../pages/User.vue'
import Profile from '../pages/Profile.vue'
import Registrasi from '../pages/Registrasi.vue';

const routes = [
    {
        name: 'Home',
        path: '/home',
        component: Home
    },
    {
        path: '/about',
        component: About
    },
    {
        name: 'User',
        path: '/customer',
        component: User,
        // props: true
    },
    {
        name: 'Daftar',
        path: '/customer/create',
        component: Registrasi,
        // props: true
    },
    {
        name: 'Profile',
        path: '/customer/:id',
        component: Profile,
        props: true
    },
    {
        path: '*',
        component: NotFound
    }
]

const router = new VueRouter({
    linkActiveClass: 'active',
    mode: 'history',
    routes: routes
})

export default router