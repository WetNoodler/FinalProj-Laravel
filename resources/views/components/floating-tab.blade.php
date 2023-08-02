<div class="box-content h-24 w-full bg-slate-950 text-white shadow-2xl shadow-white fixed z-40">
    <div class="p-6">
        
        <div class="float-left">
            <form action="{{route('act14.main')}}">
                <input type="hidden" name="currentPage" value="Shop">
                <img src="https://www.pngmart.com/files/22/Hollow-Knight-Logo-PNG-Image.png" class="w-36 absolute">
                <button class="">
                    <img src="https://www.pngmart.com/files/22/Hollow-Knight-Logo-PNG-Image.png" 
                    class="w-36 transition ease-out duration-100 opacity-100 blur-sm scale-110 absolute hover:opacity-0 hover:blur-none">
                </button>
            </form>
        </div>
        
        <div class="mx-44 my-1 text-3xl font-black float-left">{{ $currentPage }}</div>

        <div class="float-right">
            <div class="columns-4">
                    <x-tab-buttons.profile :currentPage="$currentPage"/>
                    <x-tab-buttons.cart :currentPage="$currentPage"/>
                    <x-tab-buttons.achievement :currentPage="$currentPage"/>
                <div>
                    <button class="bg-slate-700 font-family px-1 py-4 rounded-2xl
                    transition duration-100 ease-in-out hover:scale-110 hover:invert hover:bg-black"><a href="{{route('act14.login')}}">LogOut</a></button>
                </div>

            </div>
        </div>
    </div>
</div>