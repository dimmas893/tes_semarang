<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public $table = "produks";
     public function tags()
    {
        return $this->belongsToMany(Category::class);
    }

}
