<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'author',
    ];
    
    /**
     * Get all Comments of the Post.
     */
    public function comments()
    {
        //1 Post has many Comments 
        return $this->hasMany(Comment::class);
    }
}
