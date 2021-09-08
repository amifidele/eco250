<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link href="//netdna.bootstrapcdn.com/font-awesome/5.15.4/css/font-awesome.css" rel="stylesheet">

        <title>Product </title>

        <style>
          
        </style>
    </head>
    <body class="bg-white-smoke">

        {{-- start menu --}}

        <div class="w-100">



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
                        <li class="text-xl font-bold mr-5">Eco Impact</li>
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


        <div class="w-95 flex mx-auto mt-6">

            <div class="w-50 text-green-dark">

                <div>
                    <img class="w-80 clip-full" src="{{ asset('images/Reusable_Glass_Mug.jpg') }}">
                </div>


                <div class="w-100 mx-auto text-left pt-4">
                    <p class="">
                        <span><img class="" style="width: 5%" src="{{ asset('images/care.png') }}"></span>
                        <b>Are you looking for ineffective dental care</b><br>
                        that is Kind to Earth? Then look no further. 
                        This Bamboo Toothbrush, made with 100% Castor Bean Oil and USDA Certified 100% bio-based bristles, 
                        is a perfect alternative for plastic toothbrushes that are pilling up in our landfills!
                    </p>
                </div>


                <div class="w-100 mx-auto text-left pt-1">
                    <p class="">
                        <span><img class="" style="width: 7%" src="{{ asset('images/altenate.png') }}"></span>
                        <b>Are you looking for ineffective dental care</b><br>
                        that is Kind to Earth? Then look no further. 
                        This Bamboo Toothbrush, made with 100% Castor Bean Oil and USDA Certified 100% bio-based bristles, 
                        is a perfect alternative for plastic toothbrushes that are pilling up in our landfills!
                    </p>
                </div>
                

            </div>

            <div class="w-50 text-center text-green-dark pt-8">


                <div>
                    <h1 class="text-xl">10,000 RWF</h1>
                    <p class="-mt-4 underline">Isaro Eco Next</p>
                </div>

                <div>
                    <h1 class="text-2xl font-bold">ADULT BAMBOO<br> TOOTHBRUSH</h1>
                </div>

                <div class="text-center w-100">
                    <input class="form-input w-10 mx-auto shadow" type="number">
                </div>

                <div class="text-center w-100 mt-4">
                    <button class="btn border-green-dark bg-white w-50 px-20">Add To Cart</button>
                </div>

                <div class="text-center w-100 mt-4">
                    <button class="btn border-green-dark text-white px-24 bg-green-dark w-50">Buy Now</button>
                </div>

                <div class="w-70 mx-auto text-left pt-4">
                    <p class="">
                        Are you looking for ineffective dental care that is Kind to Earth? Then look no further. 
                        This Bamboo Toothbrush, made with 100% Castor Bean Oil and USDA Certified 100% bio-based bristles, 
                        is a perfect alternative for plastic toothbrushes that are pilling up in our landfills!
                    </p>
                </div>

                <div class="w-70 mx-auto text-left pt-4">
                    <p class="">
                        <span><img class="w-10" src="{{ asset('images/plant.png') }}"></span>
                        <b>Are you looking for ineffective dental care</b><br>
                        that is Kind to Earth? Then look no further. 
                        This Bamboo Toothbrush, made with 100% Castor Bean Oil and USDA Certified 100% bio-based bristles, 
                        is a perfect alternative for plastic toothbrushes that are pilling up in our landfills!
                    </p>
                </div>

                <div class="w-70 mx-auto text-left pt-4">
                    <p class="">
                        <span><img class="" style="width: 7%" src="{{ asset('images/flower.png') }}"></span>
                        <b>Ingredients</b><br>
                         - Bristles: 100% castor bean oil.<br>
                         - Handle: 100% organic bamboo<br>
                         - Naturally grown bamboo<br>
                         - Natural bacteria fighting properties<br>
                         - Verified Non toxic<br>
                         - BPA free<br>
                         - Compostable handle<br>
                    </p>
                </div>





            </div>


        </div>






    </body>

</html>