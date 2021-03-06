<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'content', 'likes'
    ];

    // protected $guarded = ['id'];

    public function getShortCommentAttribute()
    {
        return substr($this->content, 0, 200) . "...";
    }

    /**
     * Get user that posted this post.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
