<html>
    <head>
        <title>Main</title>
    </head>
    <x-tailwind/>
    <x-css-class/>
    <body class="butterfly-bg bg-fixed bg-cover">
        
        <x-floating-tab :currentPage="$currentPage"/>
        <br> <br> <br> <br>

        <div class="grid grid-cols-2">
            <div class="bg-inherit border-x-2 border-b-2 border-white rounded-b-2xl h-fit w-fill p-4 z-20 shadow-2xl shadow-white static">
                <div class="relative bg-inherit py-4">
                    <div class="font-black text-2xl text-white mx-6">Shop</div>
                    <div class="grid grid-cols-3">

                    <x-sample-shopitem/>
                    <x-sample-shopitem/>
                    <x-sample-shopitem/>
                    <x-sample-shopitem/>
                    <x-sample-shopitem/>
                    <x-sample-shopitem/>
                    <x-sample-shopitem/>    
                    <x-sample-shopitem/>
                    <x-sample-shopitem/>
                    <x-sample-shopitem/>
                    <x-sample-shopitem/>

                    </div>
                </div>
            </div>

            <div class="bg-slate-900 m-4 rounded-2xl z-20 fixed right-0 w-min-lg" style="max-width: 57.5rem">
                <div class="relative bg-slate-300 rounded-b-2xl rounded-t-xl py-4">
                    
                    <div class="relative bg-black rounded-2xl m-4 p-3">
                        <div class="static m-6">
                            <div class="bg-center bg-cover bg-no-repeat border-2 h-96 w-full m-2 rounded-xl"
                                style="background-image: url('https://cdn.steamstatic.com/steamcommunity/public/images/items/367520/88ae94fbfb817750fd86ce7c0f1656e832bd0638.jpg')"></div>
                            <div class="grid grid-cols-3">
                                
                                <x-sample-mainpage-comment/>
                                <x-sample-mainpage-comment/>
                                <x-sample-mainpage-comment/>

                            </div>
                            <div class="mx-4 mb-2 text-cyan-400">Image on top, three random comments below</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>