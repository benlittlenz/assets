import Vue from 'vue'
import VueRouter from 'vue-router';
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

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
})