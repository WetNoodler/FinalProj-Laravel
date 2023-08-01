<html>
    <head>
        <title>Register</title>
    </head>
    <x-tailwind/>
    <x-css-class/>
    <body class="knight-bg">

        <div class="box-content h-24 w-full bg-slate-950 text-white shadow-2xl shadow-white fixed z-0">
            <div class="p-6 font-black text-2xl">
                <img src="https://www.pngmart.com/files/22/Hollow-Knight-Logo-PNG-Image.png" class="w-36">
            </div>
        </div> 
        <br> <br> <br> <br>

        <div class="grid grid-cols-3 text-center">
            <x-div-break/>
            <div class="bg-slate-900 border-x-2 border-b-2 border-white rounded-b-2xl h-fit w-full p-4 z-20 shadow-2xl shadow-white">
                <div class="relative bg-slate-300 rounded-b-2xl rounded-t-xl py-4">
                    <div class="font-black text-4xl">Register</div> <br>

                    <form action="">
                        <input type="text" class="px-2 font-family rounded-lg text-2xl ring-4 ring-gray-950 mb-4" placeholder="Email"> <br>
                        <input type="text" class="px-2 font-family rounded-lg text-2xl ring-4 ring-gray-950 mb-4" placeholder="Username"> <br>
                        <input type="text" class="px-2 font-family rounded-lg text-2xl ring-4 ring-gray-950" placeholder="Password"> <br> <br>
                        <button class="bg-white font-black px-6 py-2 rounded-lg hover:shadow-md hover:shadow-white">Login</button>
                    </form>

                    <div class="absolute bottom-0 left-0">
                        <button class="bg-gradient-to-r from-slate-100 to-indigo-100 py-1 px-4 rounded-bl-xl rounded-tr-3xl 
                        border-t-4 border-r-4 border-slate-800 font-family font-bold hover:from-slate-950 hover:to-slate-500 hover:text-white">
                        <a href="{{route('act14.login')}}">Already have an account?</a></button>
                    </div>

                </div>
            </div>
            <x-div-break/>
        </div> <br>

        <div class="grid grid-cols-3 text-center">
            <x-div-break/>
            <div class="bg-slate-900 border-2 border-white rounded-2xl h-fit w-full p-4 z-20 shadow-2xl shadow-white">
                <div class="relative bg-slate-300 rounded-b-2xl rounded-t-xl py-4">
                    <div class="mb-4 font-bold text-3xl italic">ABOUT</div>

                    <button class="mb-2 bg-red-900 font-black font-family text-xl p-2 rounded-xl text-white hover:bg-red-600 hover:text-slate-100">
                        <a href="https://www.hollowknight.com/">Team Cherry</a>
                    </button> <br>

                    <button class="bg-slate-900 font-black font-family text-xl p-2 rounded-xl text-white w-fit hover:bg-blue-600">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Steam_icon_logo.svg/2048px-Steam_icon_logo.svg.png" class="float-left" style="width: 25px">
                        <a href="https://store.steampowered.com/app/367520/Hollow_Knight/" class="m-2">Steam</a>
                    </button>

                </div>
            </div>
            <x-div-break/>
        </div>

    </body>
</html>