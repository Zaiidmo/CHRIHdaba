<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','totalAmount', 'status'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
