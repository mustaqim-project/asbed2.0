<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'news_id',
        'user_id',
        'parent_id',
        'comment',
    ];

    /**
     * Get the news that owns the comment.
     */
    public function news()
    {
        return $this->belongsTo(News::class);
    }

    /**
     * Get the user that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the parent comment.
     */
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    /**
     * Get the child comments.
     */
    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    /**
     * Scope a query to only include root comments (comments without a parent).
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRootComments($query)
    {
        return $query->whereNull('parent_id');
    }
}
