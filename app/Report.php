<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
  protected $fillable = [
    'date','reference', 'moviment_id',
  ];
  public function moviments()
  {
    return $this->belongsTo(Moviment::class);
  }
}
