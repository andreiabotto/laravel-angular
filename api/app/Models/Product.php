<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
 
    use SoftDeletes;

    protected $fillable = [
        'name', 'fabrication', 'size', 'price'
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class, 'clients_products');
    }

}
