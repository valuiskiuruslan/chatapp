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
        $this->hasOne(ChatRoom::class, 'id', 'chat_room_id');
    }

    public function user() {
        $this->hasOne(User::class, 'id', 'user_id');
    }
}
