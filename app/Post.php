<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table  = 'posts';

    protected $primaryKey = 'id_post';

    protected $fillable = [
      'post_title', 'post_content', 'post_visibility', 'post_create', 'post_author', 'post_categories',
    ];
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
