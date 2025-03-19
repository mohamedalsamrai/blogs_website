<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder; 

class Blog extends Model
{
    protected $fillable = ['title', 'content', 'user_id', 'image','category'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeCategory(Builder $query, string $category)
    {
        return $query->where('category', $category)->latest();
    }
}
