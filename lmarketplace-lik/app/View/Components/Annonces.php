<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Annonces extends Component
{
    public $annonces;
    public $categorie;

    /**
     * Create a new component instance.
     */
    public function __construct( $annonces, $categorie)
    {
        $this->annonces = $annonces;
        $this->categorie = $categorie;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.annonces');
    }
}
