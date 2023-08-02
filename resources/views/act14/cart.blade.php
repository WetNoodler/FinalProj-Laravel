<html>
    <head>
        <title>Cart</title>
    </head>
    <x-tailwind/>
    <x-css-class/>
    <body class="butterfly-bg bg-fixed bg-cover">

        <x-floating-tab :currentPage="$currentPage"/>
        <br> <br> <br> <br>

        <div class="flex text-center">

            <div class="w-64 flex-none"></div>
            <div class="bg-slate-950 h-fit rounded-b-xl pt-0 p-6 flex-auto z-50">
                <div class="bg-cyan-200 rounded-b-xl p-6">
                    
                    <div class="flex">
                        <div class="flex-auto"></div>
                        <div class="bg-yellow-500 rounded-lg w-32">Item</div>
                        <div class="bg-yellow-500 rounded-lg w-32">Price</div>
                        <div class="bg-yellow-500 rounded-lg w-64 flex">
                            <div class="flex-1">-</div>
                            <div class="flex-1">Quantity</div>
                            <div class="flex-1">+</div>
                        </div>
                        <div class="flex-auto"></div>
                    </div>

                </div>
            </div>
            <div class="w-64 flex-none"></div>

        </div>
    </body>
</html>