<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{

 protected $fillable = [
   'type','price', 'product_id',
];

 public function products()
 {
   return $this->belongsTo(Products::class);
 }


 public function moviments()
 {
   return $this->hasMany(Moviment::class);
 }

}
