<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $filliable = [
        'name',
        'image'
    ];
}
