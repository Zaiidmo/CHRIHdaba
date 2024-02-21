<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'price', 'image', 'category_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function orders(){
        return $this->belongsToMany(Order::class);
    }
    public function cards(){
        return $this->belongsToMany(Card::class, 'cards_products');
    }
}
