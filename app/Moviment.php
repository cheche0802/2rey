<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moviment extends Model
{
  protected $fillable = [
    'status','date','description','amount', 'user_id','product_id','history_id',
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
    return $this->hasMany(History::class);
  }

  public function reports()
  {
    return $this->hasMany(Report::class);
  }
}
