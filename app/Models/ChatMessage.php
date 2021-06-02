<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ChatMessage
 * @package App\Models
 * @mixin Builder
 */
class ChatMessage extends Model
{
    use HasFactory;

    public function room() {
        return $this->hasOne(ChatRoom::class, 'chat_room_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
