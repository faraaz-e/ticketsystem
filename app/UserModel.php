<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $fillable = [

        "tname", "email", "date"
        ];

     protected $table = 'user_models';

     public function user(){
     	return $this->belongsTo('App\User');
     }

}
