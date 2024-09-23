<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sender_id',
        'sender_type',
        'receiver_id',
        'receiver_type',
        'message',
        'seen',
    ];

    /**
     * Get the sender of the message.
     */
    public function sender()
    {
        return $this->morphTo();
    }

    /**
     * Get the receiver of the message.
     */
    public function receiver()
    {
        return $this->morphTo();
    }

    /**
     * Scope a query to only include unread messages for a specific receiver.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  int  $receiverId
     * @param  string  $receiverType
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnread($query, $receiverId, $receiverType)
    {
        return $query->where('receiver_id', $receiverId)
                     ->where('receiver_type', $receiverType)
                     ->where('seen', false);
    }

    /**
     * Mark a chat as seen.
     *
     * @return bool
     */
    public function markAsSeen()
    {
        $this->seen = true;
        return $this->save();
    }
}
