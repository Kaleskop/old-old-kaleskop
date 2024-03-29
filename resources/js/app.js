/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// - global event management
window.events = new Vue();

// - global flash message function
window.flash = function(message) {
 // emit a flash event on each call
 window.events.$emit('flash', message);
}

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('video-player', require('./components/VideoPlayer.vue').default);
Vue.component('flash-message', require('./components/FlashMessage.vue').default);
Vue.component('opineon-comment', require('./components/OpineonComment.vue').default);
Vue.component('comment-form', require('./components/CommentForm.vue').default);
Vue.component('opineon-feed', require('./components/OpineonFeed.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({ el: '#kaleskop' });
