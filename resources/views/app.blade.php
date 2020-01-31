<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="app">
            <div class="container mx-auto">
                <header class="py-6 mb-8">Header</header>
                <main class="flex">
                    <aside class="w-1/5">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-4">Snippets</h5>
                            <ul class="list-reset">
                                <li><router-link to="/">Home</router-link></li>
                                <li><router-link to="/about">About</router-link>  </li>
                        </ul>
                        </section>
                        
                        
                          
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
                


            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
