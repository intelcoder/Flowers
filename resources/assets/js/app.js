import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

import Customers from './components/Customers/Customers.vue';
import SideNav from './components/SideNav/SideNav.vue';
import TopNav from './components/TopNav/TopNav.vue';

console.log($)

const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    history: true,
    routes: [
        {path: '/customers', component: Customers}
    ]
});

new Vue({
    created(){
    },
    components: {
        'side-nav': SideNav,
        'top-nav': TopNav
    },
    mounted(){
        $( document ).ready(function(){})
    },
    router
}).$mount('#app');


