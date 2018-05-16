<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
  protected $fillable = [
    'category_id', 'delivery', 'description',
  ];

  public function categories()
  {
    return $this->belongsTo(Category::class);
  }
  public function products()
  {
      return $this->hasMany(Product::class);
  }

  public function scopeCategory_id($query, $category_id)
  {
      if ($category_id)

      return $query->where('category_id', 'LIKE', "%$$category_id%");
  }

  public function scopeDelivery($query, $delivery)
  {
      if ($delivery)

      return $query->where('delivery', 'LIKE', "%$delivery%");
  }

  public function scopeDescription($query, $description)
  {
      if ($description)

      return $query->where('description', 'LIKE', "%$description%");
  }


}
