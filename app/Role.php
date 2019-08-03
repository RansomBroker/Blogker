<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'roles';

    // prmiary key
    protected $primaryKey = 'id_role';

    // belongsTo
    public function users(){
      return $this->belongsTo('App/Users');
    }

}
