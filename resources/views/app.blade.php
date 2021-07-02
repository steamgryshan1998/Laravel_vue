<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body class="antialiased">
        <div id="app">
            <div class="container mx-auto">
                <header class="mb-6">
                    <h1>
                        <img alt="Laracasts" src="././logo.svg">
                    </h1>
                </header>

                <main class="flex">
                    <aside class="w-1/5">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-6">The Brand</h5>

                            <ul>
                                <li class="text-sm pb-4"><router-link to="/" exact>Logo</router-link></li>
                                <li class="text-sm pb-4"><router-link to="/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-sm pb-4"><router-link to="/colors">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link to="/typography">Typography</router-link></li>
                            </ul>

                        </section>

                        <section>
                            <h5 class="uppercase font-bold mb-6">Doodles</h5>

                            <ul>
                                <li class="text-sm pb-4"><router-link to="/mascot">Mascot</router-link></li>
                                <li class="text-sm pb-4"><router-link to="/illustrations">Illustrations</router-link></li>
                                <li class="text-sm pb-4"><router-link to="/loaders-and-animations">Loaders and Animations</router-link></li>
                                <li class="text-sm pb-4"><router-link to="/wallpapers">Wallpapers</router-link></li>
                            </ul>

                        </section>
                    </aside>

                    <div class="primary">
                        <router-view></router-view>
                    </div>
                </main>

                <hr>
            </div>

        </div>

        <script src="./js/app.js"></script>
    </body>
</html>
