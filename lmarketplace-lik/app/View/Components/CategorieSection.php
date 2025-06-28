<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategorieSection extends Component
{
    /**
     * The categories collection.
     *
     * @var \Illuminate\Support\Collection|mixed
     */
    public $categories;

    /**
     * Create a new component instance.
     */
    public function __construct( $categories = null )
    {
        $this->categories = $categories ?? collect(); // Initialize with an empty collection if null
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.categorie-section');
    }
}
