<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class AnnoncesParVille extends Component
{
    public $villes;

    public function __construct($villes = null) // 
    {
        $this->villes = $villes ?? collect(); 
    }

    public function render(): View|Closure|string
    {
        return view('components.annonces-par-ville');
    }
}
