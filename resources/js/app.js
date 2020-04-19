/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('novembre', require('./components/NovembreComponent.vue').default);
Vue.component('janvier-novembre', require('./components/JanvierNovembre.vue').default);
Vue.component('mars-decembre', require('./components/MarsDecembre.vue').default);
Vue.component('juin-decembre', require('./components/JuilletDecembre.vue').default);
Vue.component('aout-juin', require('./components/AoutJuin.vue').default);
Vue.component('mars-juin', require('./components/MarsJuin.vue').default);
Vue.component('mai-mars', require('./components/MaiMars.vue').default);
Vue.component('fevrier-novembre', require('./components/FevrierNovembre.vue').default);
Vue.component('novembre-decembre', require('./components/NovembreDecembre.vue').default);
Vue.component('mars-aout', require('./components/MarsAout.vue').default);
Vue.component('category-component', require('./components/CategoryComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
