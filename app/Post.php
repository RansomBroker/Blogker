<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table  = 'posts';

    protected $primaryKey = 'id_post';

    // has many categories
    // foreign keys, columns
    public function categories(){
      return $this->hasMany('App\Category', 'id_categories', 'post_categories' );
    }

    // has many User
    public function users(){
      return $this->hasMany('App\User', 'id_user', 'post_author' );
    }
}
