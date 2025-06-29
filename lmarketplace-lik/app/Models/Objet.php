<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objet extends Model
{
    protected $table = 'products'; // Specify the table name if it differs from the model name

    protected $primaryKey = 'product_id'; // Specify the primary key if it's not 'id'

    protected $fillable = [
        'user_id',
        'categorie_id',
        'title',
        'description',
        'price',
        'status',
        'main_image',
        'city',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'categorie_id');
    }
}
