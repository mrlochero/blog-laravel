<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Post extends Model
{
    protected $table = 'posts';

    public function getCategory()
    {
        return $this->hasOne(Category::class, 'id', 'id_category');
    }
}
