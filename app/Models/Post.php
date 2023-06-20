<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id']; //guards ID from being mass assigned

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
