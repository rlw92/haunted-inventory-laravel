<?php

namespace App\Models;

use App\Models\Rating;
use App\Events\itemCreated;
use App\Notifications\Newitem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Items extends Model
{
    use HasFactory;

    

    protected $dispatchesEvents = [
        'created' => itemCreated::class,
    ];


    
    public function scopeFilter($query, array $filters){
                if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('message', 'like', '%' . request('search') . '%')
                ->orWhereRelation('user','name', 'like', '%' . request('search') . '%');
                
        }

        if($filters['filters'] ?? false) {
            if(request('filters')=='oldest'){
                $query->reorder('id','asc');
            }
            if(request('filters')=='highestRated'){
                //Below shows how to dig into individual items//
               // dd($query->get()[4]->averageRating());  
              // dd($query->orWhereRelation('user','name', 'like', '%' . request('search') . '%')->toSql()); 
              $query->reorder('average_rating','desc'); 
                
            }
            if(request('filters')=='mostRated'){
                //Below shows how to dig into individual items//
               // dd($query->get()[4]->averageRating());  
              // dd($query->orWhereRelation('user','name', 'like', '%' . request('search') . '%')->toSql()); 
              $query->reorder('amount_of_ratings','desc'); 
                
            }
                
        }
    }

    

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function amountofComments()
    {
        return Comment::where('items_id', $this->id)->count();
    }



    public function ratings(): HasMany
    {        
        return $this->hasMany(Rating::class);
    }

    
    public function averageRating()
    {
        return round(Rating::where('items_id', $this->id)->avg('stars'));
       
    }

    public function amountofRatings()
    {
        return Rating::where('items_id', $this->id)->count();
    }



    protected $fillable = [
        'title',
        'message',
        'logo',
        'average_rating',
        'amount_of_ratings'
    ];
}
