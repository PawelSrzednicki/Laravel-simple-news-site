<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author', 'title', 'description', 'user_id','category_id'
    ];
      /**
     * Get the user that owns the news.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


      /**
     * Get the categorie that owns the news.
     */
    public function categories()
    {
        return $this->belongsTo('App\Categorie', 'id');
    }
}
