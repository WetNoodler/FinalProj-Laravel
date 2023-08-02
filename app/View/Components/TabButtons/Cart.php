<?php

namespace App\View\Components\TabButtons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cart extends Component
{
    public $currentPage;
    /**
     * Create a new component instance.
     */
    public function __construct($currentPage)
    {
        $this->currentPage = $currentPage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tab-buttons.cart');
    }
}
