<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
    ];

    public function detalis()
    {
        return $this->hasMany(Detail::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeName($query, $name)
    {
        if ($name) {
            return $query->where('name', 'LIKE', "%$name%");
        }

    }

}
