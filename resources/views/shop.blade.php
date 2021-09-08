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
                        <li class="text-xl font-bold mr-5">Shop</li>
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

        <div class=" text-center text-green-dark">

            <h1 class="italic">This is where we change things!</h1>
            <p class="text-lg -mt-6">START YOUR WASTE FREE JOURNEY WITH SOME EASY SWAPS</p>

        </div>

        {{-- shop --}}

        <div class="w-90 mx-auto flex text-green-dark">

            <div class="w-30">

                <div class="text-xl">

                    <p class="font-bold">Filter</p>
 
                    <p class=" font-bold -mt-4">Shop By Categories</p>

                </div>
                

                <div class="sticky">

                    <ul>
                        <li class="my-2 text-lg"><input type="checkbox" class="mr-2">Eco Home</li>
                        <li class="my-2 text-lg"><input type="checkbox" class="mr-2">Eco Living</li>
                        <li class="my-2 text-lg"><input type="checkbox" class="mr-2">Eco Lady</li>
                        <li class="my-2 text-lg"><input type="checkbox" class="mr-2">Eco Move</li>
                        <li class="my-2 text-lg"><input type="checkbox" class="mr-2">Eco Garden </li>
                        <li class="my-2 text-lg"><input type="checkbox" class="mr-2">Eco  Decor</li>
                        <li class="my-2 text-lg"><input type="checkbox" class="mr-2">Eco Furniture</li>
                    </ul>

                </div>

               

            </div>

            <div class="w-70">

                
            <div class="w-95 mx-auto flex mt-8 ">

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

                        <img class="clip-full" src={{ asset('images/soap.jpg') }}>

                    </div>

                    <div class="text-center text-green-darker pt-1">
                        <p class="text-xl -mt-2">Glass Container</p>
                        <p class="text-xl -mt-4 font-bold">10,000 Frw</p>
                        <a class="btn bg-green-light font-bold py-1 w-80 pb-3 -mt-2">Add to cart</a>
                    </div>

                </div>

            </div>


            <div class="w-95 mx-auto flex mt-8">

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


            <div class="w-95 mx-auto flex mt-8">

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

        </div>


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


    </body>
    
    </html>