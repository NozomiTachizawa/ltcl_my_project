<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
    
    public function getByCategory(int $limit_count = 5)
    {
        return $this->reviews()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
