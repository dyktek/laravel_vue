require('./bootstrap');

window.Vue = require('vue');
import Addtobasket from './components/AddToBasket.vue';
import Basket from './components/Basket.vue';
import store from './store';

const app = new Vue({
    el: '#app',
    store,
    components: {
        Addtobasket,
        Basket
    }
});
