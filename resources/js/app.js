require('./bootstrap');
import Vue from 'vue';

import App from './App.vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import {routes} from './routes';
import moment from 'moment';

Vue.filter('formatDate', function(value) {
    if (value) {
        return moment(String(value)).format('MM/DD/YYYY')
    }
});

Vue.use(VueRouter);
Vue.prototype.axios = axios;

const router = new VueRouter({
  mode: 'history',
  routes: routes
})

const app = new Vue({
  el: '#app',
  router: router,
  render: h => h(App),
});
