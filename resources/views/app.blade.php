
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

        @extends ('layouts.app')

        @section ('content')
        @endsection

            {{-- <div class="container mx-auto">
                <header class="py-6 mb-8">Header</header>
                
                <main class="flex">
                    <aside class="w-1/5 pt-8">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-4">Snippets</h5>
                            <ul class="list-reset">
                                <li class="text-sm pb-4"><router-link to="/">Home</router-link></li>
                                <li class="text-sm pb-4"><router-link to="/about">About</router-link>  </li>
                            </ul>
                        </section>
                        
                        
                          
                    </aside> --}}

                    {{-- <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
                 --}}


            {{-- </div>
        </div> --}}
        <script src="/js/app.js"></script>
    </body>
</html>
