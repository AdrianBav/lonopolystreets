window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('app', require('./components/App.vue').default);
Vue.component('deed-card', require('./components/DeedCard.vue').default);
Vue.component('card-deck', require('./components/CardDeck.vue').default);
Vue.component('search-box', require('./components/SearchBox.vue').default);
Vue.component('site-header', require('./components/SiteHeader.vue').default);
Vue.component('about-modal', require('./components/AboutModal.vue').default);
Vue.component('search-filters', require('./components/SearchFilters.vue').default);
Vue.component('copyright-footer', require('./components/CopyrightFooter.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
