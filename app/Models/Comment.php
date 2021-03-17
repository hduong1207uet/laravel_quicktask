<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author',
        'content',
        'post_id',
    ];

    /**
     * Get the Post containing the Comment.
     */
    public function post() 
    {
        //1 Comment belongs to only 1 Post
        return $this->belongsTo(Post::class);
    }
}
