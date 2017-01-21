import Vue from 'vue'
import VueRouter from 'vue-router';
//bootstrap load ( not bootstrap framework )
import bootstrap from './bootstrap';
import 'expose?$!expose?jQuery!jquery';
import TopNav from './components/TopNav/TopNav.vue';
import SideNav from './components/SideNav/SideNav.vue';
import CustomersPage from './components/CustomersPage/CutsomersPage.vue';

const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    history: true,
    routes: [
        {path: '/customers', component: CustomersPage}
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
    },
    router
}).$mount('#app');


