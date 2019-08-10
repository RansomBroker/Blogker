<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $table = 'pages';

    protected $primaryKey = 'id_page';

    protected $fillable =[
      'page_title', 'page_content', 'page_visibility', 'page_create', 'page_author',
    ];

    // has many User
    public function users(){
      return $this->hasMany('App\User', 'id_user', 'page_author' );
    }
}
