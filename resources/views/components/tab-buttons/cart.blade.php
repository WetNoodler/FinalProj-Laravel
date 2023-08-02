@if ($currentPage == "Cart")
    <div class="p-2">
        <img src="https://www.iconpacks.net/icons/2/free-shopping-cart-icon-3041-thumb.png" class="w-10 invert absolute">
        <img src="https://www.iconpacks.net/icons/2/free-shopping-cart-icon-3041-thumb.png" class="w-10 invert blur-sm absolute">
    </div>
@else
    <div>
        <form action="{{route('act14.cart')}}">
            <button class="bg-slate-700 p-2 rounded-2xl transition duration-100 ease-in-out hover:scale-110 hover:invert hover:bg-black">
                <input type="hidden" name="currentPage" value="Cart">
                <img src="https://www.iconpacks.net/icons/2/free-shopping-cart-icon-3041-thumb.png" class="w-10 invert">
            </button>
        </form>
    </div>
@endif