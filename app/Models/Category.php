<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use HasFactory, Notifiable;
    
    protected $fillable = [
        'id', 
        'category',
    ];

    public function Posts(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id' );
    }


}