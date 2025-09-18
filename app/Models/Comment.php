<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'email',
        'name',
        'content',
        'post_id'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
