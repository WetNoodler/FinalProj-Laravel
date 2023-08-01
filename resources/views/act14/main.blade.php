<html>
    <head>
        <title>Main</title>
    </head>
    <x-tailwind/>
    <x-css-class/>
    <body class="butterfly-bg bg-fixed bg-cover">

        <div class="box-content h-24 w-full bg-slate-950 text-white shadow-2xl shadow-white fixed z-50">
            <div class="p-6">
                <img src="https://www.pngmart.com/files/22/Hollow-Knight-Logo-PNG-Image.png" class="w-36 float-left">
                <div class="float-right">
                    <div class="columns-4">
                        <div>
                            <button class="bg-slate-700 p-3 rounded-2xl transition duration-100 ease-in-out hover:scale-110 hover:invert hover:bg-black">
                                <img src="https://cdn-icons-png.flaticon.com/512/7542/7542248.png" class="w-8 invert">
                            </button>
                        </div>
                        <div>
                            <button class="bg-slate-700 p-2 rounded-2xl transition duration-100 ease-in-out hover:scale-110 hover:invert hover:bg-black">
                                <img src="https://www.iconpacks.net/icons/2/free-shopping-cart-icon-3041-thumb.png" class="w-10 invert">
                            </button>
                        </div>
                        
                        <div>
                            <button class="bg-slate-700 p-4 rounded-2xl transition duration-100 ease-in-out hover:scale-110 hover:invert hover:bg-black">
                                <img src="https://icon-library.com/images/free-trophy-icon/free-trophy-icon-0.jpg" class="w-6 invert">
                            </button>
                        </div>
                        <div>
                            <button class="bg-slate-700 font-family px-1 py-4 rounded-2xl
                            transition duration-100 ease-in-out hover:scale-110 hover:invert hover:bg-black"><a href="{{route('act14.login')}}">LogOut</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <br> <br> <br> <br>

        <div class="grid grid-cols-2">
            <div class="bg-inherit border-x-2 border-b-2 border-white rounded-b-2xl h-fit w-fill p-4 z-20 shadow-2xl shadow-white">
                <div class="relative bg-inherit rounded-b-2xl rounded-t-xl py-4">
                    <div class="font-black text-2xl text-white mx-6">Shop</div>
                    <div class="grid grid-cols-3">

                        <div class="relative bg-cyan-100 border-4 border-cyan-900 rounded-2xl m-4">
                            <div class="bg-center bg-cover bg-no-repeat h-36 m-2 rounded-xl" 
                            style="background-image: url('https://cdn.steamstatic.com/steamcommunity/public/images/items/367520/88ae94fbfb817750fd86ce7c0f1656e832bd0638.jpg')"></div>
                            <div class="mx-4 text-lg font-black">Item Name</div>
                            <div class="mx-4 italic">₱[Price]</div>
                            <div class="mx-4 mb-2 text-sm absolute bottom-0 right-0">Quantity</div>
                            <div class="mx-4 mb-2 text-green-600">For each item, display image, button, quantity, and price</div>
                        </div>
                        <div class="relative bg-cyan-100 border-4 border-cyan-900 rounded-2xl m-4">
                            <div class="bg-center bg-cover bg-no-repeat h-36 m-2 rounded-xl" 
                            style="background-image: url('https://cdn.steamstatic.com/steamcommunity/public/images/items/367520/88ae94fbfb817750fd86ce7c0f1656e832bd0638.jpg')"></div>
                            <div class="mx-4 text-lg font-black">Item Name</div>
                            <div class="mx-4 italic">₱[Price]</div>
                            <div class="mx-4 mb-2 text-sm absolute bottom-0 right-0">Quantity</div>
                            <div class="mx-4 mb-2 text-green-600">For each item, display image, button, quantity, and price</div>
                        </div>
                        <div class="relative bg-cyan-100 border-4 border-cyan-900 rounded-2xl m-4">
                            <div class="bg-center bg-cover bg-no-repeat h-36 m-2 rounded-xl" 
                            style="background-image: url('https://cdn.steamstatic.com/steamcommunity/public/images/items/367520/88ae94fbfb817750fd86ce7c0f1656e832bd0638.jpg')"></div>
                            <div class="mx-4 text-lg font-black">Item Name</div>
                            <div class="mx-4 italic">₱[Price]</div>
                            <div class="mx-4 mb-2 text-sm absolute bottom-0 right-0">Quantity</div>
                            <div class="mx-4 mb-2 text-green-600">For each item, display image, button, quantity, and price</div>
                        </div>
                        <div class="relative bg-cyan-100 border-4 border-cyan-900 rounded-2xl m-4">
                            <div class="bg-center bg-cover bg-no-repeat h-36 m-2 rounded-xl" 
                            style="background-image: url('https://cdn.steamstatic.com/steamcommunity/public/images/items/367520/88ae94fbfb817750fd86ce7c0f1656e832bd0638.jpg')"></div>
                            <div class="mx-4 text-lg font-black">Item Name</div>
                            <div class="mx-4 italic">₱[Price]</div>
                            <div class="mx-4 mb-2 text-sm absolute bottom-0 right-0">Quantity</div>
                            <div class="mx-4 mb-2 text-green-600">For each item, display image, button, quantity, and price</div>
                        </div>
                        <div class="relative bg-cyan-100 border-4 border-cyan-900 rounded-2xl m-4">
                            <div class="bg-center bg-cover bg-no-repeat h-36 m-2 rounded-xl" 
                            style="background-image: url('https://cdn.steamstatic.com/steamcommunity/public/images/items/367520/88ae94fbfb817750fd86ce7c0f1656e832bd0638.jpg')"></div>
                            <div class="mx-4 text-lg font-black">Item Name</div>
                            <div class="mx-4 italic">₱[Price]</div>
                            <div class="mx-4 mb-2 text-sm absolute bottom-0 right-0">Quantity</div>
                            <div class="mx-4 mb-2 text-green-600">For each item, display image, button, quantity, and price</div>
                        </div>
                        <div class="relative bg-cyan-100 border-4 border-cyan-900 rounded-2xl m-4">
                            <div class="bg-center bg-cover bg-no-repeat h-36 m-2 rounded-xl" 
                            style="background-image: url('https://cdn.steamstatic.com/steamcommunity/public/images/items/367520/88ae94fbfb817750fd86ce7c0f1656e832bd0638.jpg')"></div>
                            <div class="mx-4 text-lg font-black">Item Name</div>
                            <div class="mx-4 italic">₱[Price]</div>
                            <div class="mx-4 mb-2 text-sm absolute bottom-0 right-0">Quantity</div>
                            <div class="mx-4 mb-2 text-green-600">For each item, display image, button, quantity, and price</div>
                        </div>
                        <div class="relative bg-cyan-100 border-4 border-cyan-900 rounded-2xl m-4">
                            <div class="bg-center bg-cover bg-no-repeat h-36 m-2 rounded-xl" 
                            style="background-image: url('https://cdn.steamstatic.com/steamcommunity/public/images/items/367520/88ae94fbfb817750fd86ce7c0f1656e832bd0638.jpg')"></div>
                            <div class="mx-4 text-lg font-black">Item Name</div>
                            <div class="mx-4 italic">₱[Price]</div>
                            <div class="mx-4 mb-2 text-sm absolute bottom-0 right-0">Quantity</div>
                            <div class="mx-4 mb-2 text-green-600">For each item, display image, button, quantity, and price</div>
                        </div>
                        <div class="relative bg-cyan-100 border-4 border-cyan-900 rounded-2xl m-4">
                            <div class="bg-center bg-cover bg-no-repeat h-36 m-2 rounded-xl" 
                            style="background-image: url('https://cdn.steamstatic.com/steamcommunity/public/images/items/367520/88ae94fbfb817750fd86ce7c0f1656e832bd0638.jpg')"></div>
                            <div class="mx-4 text-lg font-black">Item Name</div>
                            <div class="mx-4 italic">₱[Price]</div>
                            <div class="mx-4 mb-2 text-sm absolute bottom-0 right-0">Quantity</div>
                            <div class="mx-4 mb-2 text-green-600">For each item, display image, button, quantity, and price</div>
                        </div>
                        <div class="relative bg-cyan-100 border-4 border-cyan-900 rounded-2xl m-4">
                            <div class="bg-center bg-cover bg-no-repeat h-36 m-2 rounded-xl" 
                            style="background-image: url('https://cdn.steamstatic.com/steamcommunity/public/images/items/367520/88ae94fbfb817750fd86ce7c0f1656e832bd0638.jpg')"></div>
                            <div class="mx-4 text-lg font-black">Item Name</div>
                            <div class="mx-4 italic">₱[Price]</div>
                            <div class="mx-4 mb-2 text-sm absolute bottom-0 right-0">Quantity</div>
                            <div class="mx-4 mb-2 text-green-600">For each item, display image, button, quantity, and price</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-slate-900 m-4 border-2 border-white rounded-2xl h-fit w-fill p-4 z-20 shadow-2xl shadow-white ">
                <div class="relative bg-slate-300 rounded-b-2xl rounded-t-xl py-4">
                    
                </div>
            </div>
        </div>
    </body>
</html>