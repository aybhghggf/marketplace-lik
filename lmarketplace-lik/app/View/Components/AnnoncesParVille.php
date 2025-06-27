<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class AnnoncesParVille extends Component
{
    public $villes;

    public function __construct($villes = null) // ✅ نزيدو = null باش ما يعطيناش الخطأ
    {
        $this->villes = $villes ?? collect(); // ✅ حتى إيلا ما تسيفطاتش
    }

    public function render(): View|Closure|string
    {
        return view('components.annonces-par-ville');
    }
}
