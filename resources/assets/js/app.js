
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import Example from './components/Example.vue';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page.Then, you may begin adding components to this application *
     or customize the JavaScript scaffolding to fit your unique needs.*/

 new Vue({
     routes
 }).$mount('#app');

 export default app;
