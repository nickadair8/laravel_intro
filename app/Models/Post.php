<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id']; //guards ID from being mass assigned

    protected $with = ['category', 'author'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters){
        
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', "%" . request('search') . '%')->orWhere('body', 'like', "%" . request('search') . '%');
        }
        
    }
}
