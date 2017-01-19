import VueRouter from 'vue-router';
import Customers from './components/Customers/Customers.vue';

const routes = [
  {
    path: '/',

    component: { template : '<div>test</div>'}
  },
  {
    path: '/customers',
    name:'customers',
    component: Customers
  }
];

export default new VueRouter({
  history: true,
  routes,
  saveScrollPosition: true,
  root: '/'
});
