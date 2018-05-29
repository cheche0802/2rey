<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{

 protected $fillable = [
<<<<<<< HEAD
   'type','price', 'product_id',
=======
   'date', 'cost','sell', 'product_id', 'moviment_id',
>>>>>>> 8a81a8df7e9d2f01845f27b5e461d6982917b123
 ];

 public function products()
 {
   return $this->belongsTo(Products::class);
 }
<<<<<<< HEAD
=======

 public function moviments()
 {
   return $this->hasMany(Moviment::class);
 }
>>>>>>> 8a81a8df7e9d2f01845f27b5e461d6982917b123
}
