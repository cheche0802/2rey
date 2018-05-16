<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
  protected $fillable =[
     'number', 'user_id', 
  ];

  public function users()
  {
    return $this->belongsTo(User::class);
  }
}
