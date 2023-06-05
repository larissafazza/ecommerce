<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'category', 'image1','image2','image3'];


    public function seller(){
        return $this->belongsTo(Seller::class);
    }
}
