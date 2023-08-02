@if ($currentPage == "Profile")
    <div class="p-3">
        <img src="https://cdn-icons-png.flaticon.com/512/7542/7542248.png" class="w-8 invert absolute">
        <img src="https://cdn-icons-png.flaticon.com/512/7542/7542248.png" class="w-8 invert blur-sm absolute">
    </div>
@else
    <div>
        <form action="{{route('act14.profile')}}">
            <button class="bg-slate-700 p-3 rounded-2xl transition duration-100 ease-in-out hover:scale-110 hover:invert hover:bg-black">
                <input type="hidden" name="currentPage" value="Profile">
                <img src="https://cdn-icons-png.flaticon.com/512/7542/7542248.png" class="w-8 invert">
            </button> 
        </form>
    </div>
@endif