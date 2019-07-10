require('./bootstrap');
window.Vue = require('vue');

// vuejs-paginate
import Paginate from 'vuejs-paginate'
Vue.component('paginate', Paginate)
// vuejs-paginate

Vue.component('main-component', require('./components/frontend/FrontendMaster.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

//Start vue-x
import Vuex from 'vuex'
Vue.use(Vuex)
import storeData from './store/index'
const store = new Vuex.Store(
    storeData
);
//End vue-x

//Start Vue Router
import VueRouter from 'vue-router'
Vue.use(VueRouter);
import {routes} from './router'
const router = new VueRouter({
    // mode: 'history',
    routes
});
//End Vue Router

// new Vue(Vue.util.extend(router)).$mount('#app');
const app = new Vue(Vue.util.extend({
    el: '#app',
    router,
    store
}));
