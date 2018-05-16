<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{

 protected $fillable = [
   'date', 'cost','sell', 'product_id',
 ];

 public function products()
 {
   return $this->belongsTo(Products::class);
 }

 public function moviments()
 {
   return $this->belongsTo(Moviment::class);
 }
}
