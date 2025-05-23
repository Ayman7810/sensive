<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    protected $fillable = ['name' , 'desc' , 'image' ,'category_id' , 'user_id'];

    public function category()  {
        
        return $this->belongsTo(Category::class);
    }
    public function user()  {
        
        return $this->belongsTo(User::class);
    }
    
    public function comments()  {
        
        return $this->hasMany(Comment::class);
    }
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($blog) {
            $blog->comments()->delete(); 
        });
    }
    
}