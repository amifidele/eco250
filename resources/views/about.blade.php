<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link href="//netdna.bootstrapcdn.com/font-awesome/5.15.4/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        <title>Product </title>

        <style>
          
        </style>
    </head>
    <body class="bg-white-smoke">

        {{-- start menu --}}

        <div class="w-100 z-99 relative bg-white">



            <div class="w-100 bg-green-dark py-2 flex">
                
                <div class="w-50 pl-4">

                    <img class="w-15" src="{{ asset('images/social.png') }}">

                </div>

                <div class="w-50  text-white font-bold text-left ">
                    <span>Trees Planted : 5 000</span>
                </div>

            </div>

            <div class="w-100 flex shadow pb-3">

                <div class="w-20 pl-4">
                    <a href="/">
                        <img class="w-50" src="{{ asset('images/logo.png') }}">
                    </a>
                  
                </div>

                <div class="w-60  text-center">

                    <ul class="list inline-block text-green-dark pt-3">
                        <li class="text-xl font-bold mr-5"><a href="/about">Eco Impact</a></li>
                        <li class="text-xl font-bold mr-5"><a href="/shop">Shop</a></li>
                        <li class="text-xl font-bold mr-5">WholeSale</li>
                        <li class="text-xl font-bold mr-5">Double Impact</li>
                        <li class="text-xl font-bold mr-5">Blog</li>
                    </ul>

                </div>

                <div class="w-20 pt-4 text-green-dark flex">

                    <div class="w-50">

                        <span>Hello, Sign in</span><br>
                        <span class="font-bold">Account</span>

                    </div>

                    <div class="w-50">

                        <img class="w-30 mt-2" src="{{ asset('images/cart.png') }}">
 
                    </div>
                    
                    

                </div>

            </div>

        </div>

        {{-- end menu --}}

        <img class="-mt-48 z-0" src="{{ asset('images/website.jpg') }}">

    </body>

</html>