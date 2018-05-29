<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moviment extends Model
{
  protected $fillable = [
<<<<<<< HEAD
<<<<<<< HEAD
  'code', 'status','description','amount', 'price', 'user_id','product_id'
=======
  'code', 'status','date','description','amount', 'cost','sell', 'user_id','product_id'
>>>>>>> 8a81a8df7e9d2f01845f27b5e461d6982917b123
=======
  'code', 'status','date','description','amount', 'cost','sell', 'user_id','product_id'
>>>>>>> 8a81a8df7e9d2f01845f27b5e461d6982917b123
  ];

  public function users()
  {
    return $this->belongsTo(User::class);
  }

  public function products()
  {
    return $this->belongsTo(Product::class);
  }

  public function histories()
  {
    return $this->belongsTo(History::class);
  }

  public function reports()
  {
    return $this->hasMany(Report::class);
  }
}
