<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    protected $primaryKey = 'id_categories';

    // protected $fillable = [
    //   'categories_name',
    // ];

    //belongs to
    public function posts(){
      return $this->belongsTo('App\Post');
    }
}
