<template>
    <div>

        <h1 class="font-normal text-3xl text-grey-darkest">
            Snippets
        </h1>
        <div>
            <div class="flex justify-between mb-6">
                <p>Snippet submitted by <strong>user</strong></p>

                <p>Edit</p>
            </div>
            <div class="block shadow flex items-center justify-center">
                <highlight-code class="min-w-full" lang="javascript">
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
                    import 'highlight.js/styles/default.css';
                    Vue.use(VueHighlightJS);
                    Vue.use(VueRouter)

                    const app = new Vue({
                        el: '#app',
                        router: new VueRouter(routes)
                    })
                </highlight-code>
            </div>
            
            
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>
