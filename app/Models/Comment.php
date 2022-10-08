<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'author','comment','post_id'
    ];


      /**
     * Get the products for the category.
     */
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
