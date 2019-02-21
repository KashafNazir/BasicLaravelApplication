<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table ='posts';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true; 

    public function user(){
        //A post has a relationship to user and it belongs to App\User
       return $this->belongsTo('App\User');
    }
}
