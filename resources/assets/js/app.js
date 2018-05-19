
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
<<<<<<< HEAD
require('jquery');
=======
>>>>>>> a7027eb98e2e625ec931ed2d98f0b59f17551760

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
<<<<<<< HEAD
Vue.component('image-component', require('./components/ImageGenarateComponent.vue'));


=======
>>>>>>> a7027eb98e2e625ec931ed2d98f0b59f17551760

const app = new Vue({
    el: '#app'
});
