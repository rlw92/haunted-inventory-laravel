<?php

namespace App\Models;

use App\Models\Rating;
use App\Events\itemCreated;
use App\Notifications\Newitem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class items extends Model
{
    use HasFactory;

    

    protected $dispatchesEvents = [
        'created' => itemCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function averageRating()
    {
        return round(Rating::where('items_id', $this->id)->avg('stars'));
       
    }



    protected $fillable = [
        'title',
        'message',
        'logo'
    ];
}
