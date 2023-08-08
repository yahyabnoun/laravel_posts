<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'premium',
        'published',
        'photo',
        'admin_id',
        'categorie_id'
    ];


    public function admin( )
    {
        return $this->belongsTo(Admin::class);
    }

    public function category( )
    {
        return $this->belongsTo(Categories::class,'categorie_id');
    }

    // public function scopePublishedLastWeek($query)
    // {
    //     return $query->where('created_at', '>=', Carbon::now()->subWeek());
    // }

    public function scopeCounttest($query)
     {
        return $query->count();
    }
}
