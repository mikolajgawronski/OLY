<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'subcategory_id', 'title', 'description', 'price', 'is_negotiable', 'is_business',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function subcategory(){
        return $this->belongsTo('App\Subcategory');
    }
}
