import Vue from 'vue'
import VueRouter from 'vue-router';
import Vuetify from 'vuetify'
import VeeValidate from 'vee-validate'
import routes from './routes'
import VueHighlightJS from 'vue-highlight.js';

// Highlight.js languages (All languages)
import 'vue-highlight.js/lib/allLanguages'

/*
* Import Highlight.js theme
* Find more: https://highlightjs.org/static/demo/
*/
import 'highlight.js/styles/tomorrow-night.css';
Vue.use(VueHighlightJS);
Vue.use(VueRouter)
Vue.use(Vuetify)
Vue.use(VeeValidate, { inject: false })

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
})