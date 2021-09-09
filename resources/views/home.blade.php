<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link href="//netdna.bootstrapcdn.com/font-awesome/5.15.4/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
              integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        <title>Eco250.rw</title>

        <style>
          
        </style>
    </head>
    <body>

        {{-- start menu --}}

        <div class="w-100">



            <div class="w-100 bg-green-darker py-2 flex">
                
                <div class="w-50 pl-4">

                    <img class="w-15" src="{{ asset('images/social.png') }}">

                </div>

                <div class="w-50  text-white font-bold text-left ">
                    <span>Trees Planted : 5 000</span>
                </div>

            </div>

            <div class="w-100 flex shadow pb-3">

                <div class="w-30 pl-4">
                    <img class="w-40" src="{{ asset('images/logo.png') }}">
                </div>

                <div class="w-60  text-center">

                    <ul class="list inline-block text-green-dark pt-2">
                        <li class="text-xl font-bold mr-20"><a href="/about">Eco Impact</a></li>
                        <li><a class="btn bg-green-darker px-1 py-1 font-bold text-xl rounded-full text-white mt-1" href="/shop">Go To</a></li>
                        <li> <span><img class="w-80 -ml-8 -mt-3" src="{{ asset('images/shop.png') }}"></span></li>
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

        <div>
                <div class="absolute z-99 w-100">

                    <div class="w-80 mx-auto font-bold text-green-dark pt-10 text-center mt-10 ">

                        <h1 class="text-5xl">Welcome to Eco250.rw</h1>

                        <a class="btn bg-white border-green-dark" href="/shop">Start Shopping</a>

                    </div>

                </div>
                <div class="w-100 relative z-0" style="height:400px">
                    <img class="clip-full"  src="{{ asset('images/wallpaper.jpg') }}">
                </div> 

        </div>




        <div class="">

            <div class="w-80 mx-auto flex  text-center pt-12 ">

                <div class="w-25 mr-4">

                    <div class="border-2 border-green-dark rounded relative z-0">

                        <img class="rounded" src="{{ asset('images/home.jpg') }}">

                    </div>

                    <div class="w-80 mx-auto font-bold text-center text-green-dark shadow bg-white py-4 -mt-6 z-1 relative">
                        <span>Eco Home</span>
                    </div>


                </div>

                <div class="w-25 mr-4">

                    <div class="border-2 border-green-dark rounded relative z-0">

                        <img class="rounded" src="{{ asset('images/living.jpg') }}">

                    </div>

                    <div class="w-80 mx-auto font-bold text-center text-green-dark shadow bg-white py-4 -mt-6 z-1 relative">
                        <span>Eco Living</span>
                    </div>


                </div>

                <div class="w-25 mr-4">

                    <div class="border-2 border-green-dark rounded relative z-0">

                        <img class="rounded" src="{{ asset('images/lady.jpg') }}">

                    </div>

                    <div class="w-80 mx-auto font-bold text-center text-green-dark shadow bg-white py-4 -mt-6 z-1 relative">
                        <span>Eco Lady</span>
                    </div>


                </div>

                <div class="w-25 mr-4">

                    <div class="border-2 border-green-dark rounded relative z-0">

                        <img class="rounded" src="{{ asset('images/move.jpg') }}">

                    </div>

                    <div class="w-80 mx-auto font-bold text-center text-green-dark shadow bg-white py-4 -mt-6 z-1 relative">
                        <span>Eco move</span>
                    </div>


                </div>

                

            </div>

            
        </div>


        <div class="">

            <div class="w-80 mx-auto text-center flex pt-8 ">

                <div class="w-30 mr-4">

                    <div class="border-2 border-green-dark rounded relative z-0">

                        <img class="rounded" src="{{ asset('images/garden.jpg') }}">

                    </div>

                    <div class="w-80 mx-auto font-bold text-center text-green-dark shadow bg-white py-4 -mt-6 z-1 relative">
                        <span>Eco Garden</span>
                    </div>


                </div>

                <div class="w-30 mr-4">

                    <div class="border-2 border-green-dark rounded relative z-0">

                        <img class="rounded" src="{{ asset('images/decor.jpg') }}">

                    </div>

                    <div class="w-80 mx-auto font-bold text-center text-green-dark shadow bg-white py-4 -mt-6 z-1 relative">
                        <span>Eco Decor</span>
                    </div>


                </div>

                <div class="w-30 mr-4">

                    <div class="border-2 border-green-dark rounded relative z-0">

                        <img class="rounded" src="{{ asset('images/furniture.jpg') }}">

                    </div>

                    <div class="w-80 mx-auto font-bold text-center text-green-dark shadow bg-white py-4 -mt-6 z-1 relative">
                        <span>Eco Furniture</span>
                    </div>


                </div>

                

                

            </div>

            
        </div>

        {{-- products --}}

        <a href="/product">

        <div class="pl-8">

            <div class="text-center font-bold text-green-darker pt-10 mt-10">

                    <h1 class="text-xl">Suistanable</h1>

                    <h1 class="text-2xl -mt-2">Start your waste-free journey with some easy swaps</h1>

            </div>

            <div class="w-80 mx-auto flex mt-8 ">
                <a href="/product">

                <div class="w-30 mr-6 rounded border-1 border-grey-dark  text-center py-4">

                    <div class="" style="height: 200px">

                        <img class="clip-full" src={{ asset('images/GlassContainer.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker pt-1">
                        <p class="text-xl -mt-2">Glass Container</p>
                        <p class="text-xl -mt-4 font-bold">10,000 Frw</p>
                        <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a>
                    </div>

                </div>

                <div class="w-30 mr-6 rounded border-1 border-grey-dark  text-center py-4">

                    <div class="" style="height: 200px">

                        <img class="clip-full" src={{ asset('images/ShampooBar.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker pt-1">
                        <p class="text-xl -mt-2">Glass Container</p>
                        <p class="text-xl -mt-4 font-bold">10,000 Frw</p>
                        <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a>
                    </div>

                </div>

                <div class="w-30 mr-6 rounded border-1 border-grey-dark  text-center py-4">

                    <div class="" style="height: 200px">

                        <img class="clip-full" src={{ asset('images/living.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker pt-1">
                        <p class="text-xl -mt-2">Glass Container</p>
                        <p class="text-xl -mt-4 font-bold">10,000 Frw</p>
                        <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a>
                    </div>

                </div>

            </div>


            <div class="w-80 mx-auto flex mt-8">

                <div class="w-30 mr-6 rounded border-1 border-grey-dark  text-center py-4">

                    <div class="" style="height: 200px">

                        <img class="clip-full" src={{ asset('images/coffee.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker pt-1">
                        <p class="text-xl -mt-2">Reusable coffee mug</p>
                        <p class="text-xl -mt-4 font-bold">10,000 Frw</p>
                        <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a>
                    </div>

                </div>

                <div class="w-30 mr-6 rounded border-1 border-grey-dark  text-center py-4">

                    <div class="" style="height: 200px">

                        <img class="clip-full" src={{ asset('images/lazer.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker pt-1">
                        <p class="text-xl -mt-2">Standard Lazer</p>
                        <p class="text-xl -mt-4 font-bold">10,000 Frw</p>
                        <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a>
                    </div>

                </div>


                <div class="w-30 mr-6 rounded border-1 border-grey-dark  text-center py-4">

                    <div class="" style="height: 200px">

                        <img class="clip-full" src={{ asset('images/s5006271.png') }}>

                    </div>

                    <div class="text-center text-green-darker pt-1">
                        <p class="text-xl -mt-2">Reusable coffee mug</p>
                        <p class="text-xl -mt-4 font-bold">10,000 Frw</p>
                        <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a>
                    </div>

                </div>


            </div>


            <div class="w-80 mx-auto flex mt-8">

                <div class="w-30 mr-6 rounded border-1 border-grey-dark  text-center py-4">

                    <div class="" style="height: 200px">

                        <img class="clip-full" src={{ asset('images/ManstrualCup.jfif') }}>

                    </div>

                    <div class="text-center text-green-darker pt-1">
                        <p class="text-xl -mt-2">Manstrual Cup</p>
                        <p class="text-xl -mt-4 font-bold">10,000 Frw</p>
                        <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a>
                    </div>

                </div>

                <div class="w-30 mr-6 rounded border-1 border-grey-dark  text-center py-4">

                    <div class="" style="height: 200px">

                        <img class="clip-full" src={{ asset('images/Silicone.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker pt-1">
                        <p class="text-xl -mt-2">Standard Silicone</p>
                        <p class="text-xl -mt-4 font-bold">10,000 Frw</p>
                        <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a>
                    </div>

                </div>


                <div class="w-30 mr-6 rounded border-1 border-grey-dark  text-center py-4">

                    <div class="" style="height: 200px">

                        <img class="clip-full" src={{ asset('images/bike.jpeg') }}>

                    </div>

                    <div class="text-center text-green-darker pt-1">
                        <p class="text-xl -mt-2">Bike</p>
                        <p class="text-xl -mt-4 font-bold">10,000 Frw</p>
                        <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a>
                    </div>

                </div>


            </div>





        </div>

        </a>


        {{-- end product --}}

        {{-- bundle and save --}}

        <div class="w-80 mx-auto pl-8">

            <div class="text-center font-bold text-green-darker pt-10 mt-10">
                <h1 class="text-xl">Shop Our</h1>
                <h1 class="text-4xl -mt-2">BEST SELLING PRODUCTS</h1>
            </div>
            
            <div class="absolute l-4 text-3xl text-green pt-32">
                <i class="fas fa-chevron-left"></i>
            </div>

            <div class="absolute r-15 text-3xl text-green pt-32">
                <i class="fas fa-chevron-right"></i>
            </div>


            <div class="w-100 mx-auto flex mt-8">

                <div class="w-30 mr-6 rounded text-center py-4">

                    <div>

                        <img src={{ asset('images/Picture2.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker">
                        <p class="text-xl -mt-2">The refill bottle</p>
                        <p class="text-xl -mt-2 font-bold">10,000 Frw</p>

                        <div class="-mt-6">
                            <ul class="list inline-block text-yellow">
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                            </ul>
                        </div>
                        
                        {{-- <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a> --}}
                    </div>

                </div>
                <div class="w-30 mr-6 rounded text-center py-4">

                    <div>

                        <img src={{ asset('images/Picture2.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker">
                        <p class="text-xl -mt-2">The refill bottle</p>
                        <p class="text-xl -mt-2 font-bold">10,000 Frw</p>

                        <div class="-mt-6">
                            <ul class="list inline-block text-yellow">
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                            </ul>
                        </div>
                        
                        {{-- <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a> --}}
                    </div>

                </div>


               <div class="w-30 mr-6 rounded text-center py-4">

                    <div>

                        <img src={{ asset('images/Picture2.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker">
                        <p class="text-xl -mt-2">The refill bottle</p>
                        <p class="text-xl -mt-2 font-bold">10,000 Frw</p>

                        <div class="-mt-6">
                            <ul class="list inline-block text-yellow">
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                            </ul>
                        </div>
                        
                        {{-- <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a> --}}
                    </div>

                </div>

            </div>



        </div>

        {{-- end bundle and save --}}


        {{-- Isaro Eco kits --}}

        <div class="w-80 mx-auto pl-8">

            <div class="text-center font-bold text-green-darker pt-10 mt-10">
                <h1 class="text-xl">SHOPPING SIMPLIFIED</h1>
                <h1 class="text-4xl font-bold -mt-2">ISARO ECO KITS</h1>
            </div>

            <div class="absolute l-4 text-3xl text-green pt-32">
                <i class="fas fa-chevron-left"></i>
            </div>

            <div class="absolute r-15 text-3xl text-green pt-32">
                <i class="fas fa-chevron-right"></i>
            </div>


            <div class="w-100 mx-auto flex mt-8">

                <div class="w-30 mr-6 rounded text-center py-4">

                    <div>

                        <img src={{ asset('images/Picture2.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker">
                        <p class="text-xl -mt-2">The refill bottle</p>
                        <p class="text-xl -mt-2 font-bold">10,000 Frw</p>

                        <div class="-mt-6">
                            <ul class="list inline-block text-yellow">
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                            </ul>
                        </div>
                        
                        {{-- <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a> --}}
                    </div>

                </div>
                <div class="w-30 mr-6 rounded text-center py-4">

                    <div>

                        <img src={{ asset('images/Picture2.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker">
                        <p class="text-xl -mt-2">The refill bottle</p>
                        <p class="text-xl -mt-2 font-bold">10,000 Frw</p>

                        <div class="-mt-6">
                            <ul class="list inline-block text-yellow">
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                            </ul>
                        </div>
                        
                        {{-- <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a> --}}
                    </div>

                </div>


               <div class="w-30 mr-6 rounded text-center py-4">

                    <div>

                        <img src={{ asset('images/Picture2.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker">
                        <p class="text-xl -mt-2">The refill bottle</p>
                        <p class="text-xl -mt-2 font-bold">10,000 Frw</p>

                        <div class="-mt-6">
                            <ul class="list inline-block text-yellow">
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                            </ul>
                        </div>
                        
                        {{-- <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a> --}}
                    </div>

                </div>

            </div>






        </div>

        {{-- Isaro Eco Kits --}}


        {{-- blog --}}

        <div class="w-80 mx-auto pl-8">

            <div class="text-center font-bold text-green-darker pt-10 mt-10">
                <h1 class="text-xl">LEARN HOW TO LIVE MORE SUSTAINABLY CARING YOURSELF AND MOTHER PLANET</h1>
                <h1 class="text-4xl -mt-2">ECO LIFE BLOG</h1>
            </div>

            <div class="w-100 mx-auto flex mt-8 pt-6 pl-8">

                <div class="w-30 mr-6 rounded text-center py-18 px-4 bg-grey-light">

                    <div class="text-center text-green-darker">
                        <p class="font-bold">
                            6 Pollution-Reducing Resolutions for a More Sustainable 2021

                        </p>
                        {{-- <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a> --}}
                    </div>

                </div>

                <div class="w-30 mr-6 rounded text-center py-18 px-4 bg-grey-light">

                    <div class="text-center text-green-darker">
                        <p class="font-bold">
                            6 Pollution-Reducing Resolutions for a More Sustainable 2021

                        </p>
                        {{-- <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a> --}}
                    </div>

                </div>

                <div class="w-30 mr-6 rounded text-center py-18 px-4 bg-grey-light">

                    <div class="text-center text-green-darker">
                        <p class="font-bold">
                            6 Pollution-Reducing Resolutions for a More Sustainable 2021

                        </p>
                        {{-- <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a> --}}
                    </div>

                </div>

                

            </div>


            
        </div>

        {{-- end blog --}}


        {{-- product criteria --}}

        <div class="w-100 mt-20">

            <div class="w-80 mx-auto flex">

                    <div class="w-30 bg-green-lighter py-5 text-center text-green-dark">
                        <h1 class="text-2xl font-bold">Product Criteria</h1>
                    </div>

                    <div class="w-70 px-3">
                        <p>
                            Our products are designed with environmental-friendly materials that do not cause harm to the environment. A strict product principle is implemented in the production process which aligns with our environmental values. Each product must have at least three of the five following criteria.
                        </p>
                    </div>


            </div>

        </div>

        {{-- end product criteria --}}

        <div class="w-100 mt-5">

            <div class="w-80 mx-auto flex pt-20">

                <div class="w-25 text-center">

                    <div>
                        <img class="w-20" src="{{ asset('images/earth.png') }}">
                    </div>

                    <div>
                        <p>What are these? Compostable materials provide the earth with nutrients once it has completely broken down. Biodegradable materials
                        </p>
                    </div>

                    <div class="text-green-dark font-bold">
                        <p>Compostable -></p>
                    </div>

                </div>

                <div class="w-25 text-center">

                    <div>
                        <img class="w-30 py-1" src="{{ asset('images/eye.png') }}">
                    </div>

                    <div>
                        <p>What are these? Compostable materials provide the earth with nutrients once it has completely broken down. Biodegradable materials
                        </p>
                    </div>

                    <div class="text-green-dark font-bold">
                        <p>Vegan -></p>
                    </div>

                </div>

                <div class="w-25 text-center">

                    <div>
                        <img class="w-20" src="{{ asset('images/round.png') }}">
                    </div>

                    <div>
                        <p>What are these? Compostable materials provide the earth with nutrients once it has completely broken down. Biodegradable materials
                        </p>
                    </div>

                    <div class="text-green-dark font-bold">
                        <p>Circular -></p>
                    </div>

                </div>


                <div class="w-25 text-center">

                    <div>
                        <img class="w-20" src="{{ asset('images/bulb.png') }}">
                    </div>

                    <div>
                        <p>What are these? Compostable materials provide the earth with nutrients once it has completely broken down. Biodegradable materials
                        </p>
                    </div>

                    <div class="text-green-dark font-bold">
                        <p>100% Plastic Free -></p>
                    </div>

                </div>

            </div>

        </div>

        {{-- end product criteria --}}


        {{-- Isaro Eco kits --}}

        <div class="w-80 mx-auto pl-8">

            <div class="text-center font-bold text-green-darker pt-10 mt-10">
                <h1 class="text-xl">BROWSE</h1>
                <h1 class="text-4xl font-bold -mt-2">NEW ARRIVAL PRODUCTS</h1>
            </div>

            <div class="absolute l-4 text-3xl text-green pt-32">
                <i class="fas fa-chevron-left"></i>
            </div>

            <div class="absolute r-15 text-3xl text-green pt-32">
                <i class="fas fa-chevron-right"></i>
            </div>


            <div class="w-100 mx-auto flex mt-8">

                <div class="w-30 mr-6 rounded text-center py-4">

                    <div>

                        <img src={{ asset('images/Picture2.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker">
                        <p class="text-xl -mt-2">The refill bottle</p>
                        <p class="text-xl -mt-2 font-bold">10,000 Frw</p>

                        <div class="-mt-6">
                            <ul class="list inline-block text-yellow">
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                            </ul>
                        </div>
                        
                        {{-- <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a> --}}
                    </div>

                </div>
                <div class="w-30 mr-6 rounded text-center py-4">

                    <div>

                        <img src={{ asset('images/Picture2.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker">
                        <p class="text-xl -mt-2">The refill bottle</p>
                        <p class="text-xl -mt-2 font-bold">10,000 Frw</p>

                        <div class="-mt-6">
                            <ul class="list inline-block text-yellow">
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                            </ul>
                        </div>
                        
                        {{-- <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a> --}}
                    </div>

                </div>


               <div class="w-30 mr-6 rounded text-center py-4">

                    <div>

                        <img src={{ asset('images/Picture2.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker">
                        <p class="text-xl -mt-2">The refill bottle</p>
                        <p class="text-xl -mt-2 font-bold">10,000 Frw</p>

                        <div class="-mt-6">
                            <ul class="list inline-block text-yellow">
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                                <li class=""><i class="fas fa-star "></i></li>
                            </ul>
                        </div>
                        
                        {{-- <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a> --}}
                    </div>

                </div>

            </div>




        </div>

        {{-- Isaro Eco Kits --}}

        <div>
            <div class="w-80 mx-auto text-center py-8 px-4">

                <h1 class="text-green-darker font-bold">OUR STORY</h1>

                <p class="pb-8">
                    It is not always easy stepping out of your comfort zone, your habits and routines. Change can often be quite challenging. We understand it and that is why we are here - to help you understand why it matters and to make it easier for you - because we need you and our planet needs all of us!
                </p>

                <a class="btn bg-green-dark text-white w-30 text-lg">About Us</a>

            </div>
        </div>



        <div style="height:100px"></div>

        
    </body>
</html>
