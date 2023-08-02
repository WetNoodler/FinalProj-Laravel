@if ($currentPage == "Achievement")
    <div class="p-4">
        <img src="https://icon-library.com/images/free-trophy-icon/free-trophy-icon-0.jpg" class="w-6 invert absolute">
        <img src="https://icon-library.com/images/free-trophy-icon/free-trophy-icon-0.jpg" class="w-6 invert blur-sm absolute">
    </div>
@else
    <div>
        <form action="{{route('act14.main')}}">
            <button class="bg-slate-700 p-4 rounded-2xl transition duration-100 ease-in-out hover:scale-110 hover:invert hover:bg-black">
                <input type="hidden" name="currentPage" value="Achievement">
                <img src="https://icon-library.com/images/free-trophy-icon/free-trophy-icon-0.jpg" class="w-6 invert">
            </button>
        </form>
        
    </div>
@endif