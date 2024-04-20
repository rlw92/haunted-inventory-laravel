<?php

namespace App\Models;

use App\Models\User;
use App\Models\items;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'user_id',
        'items_id'
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(items::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

