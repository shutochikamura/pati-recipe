<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'material' => 'required',
        'recipe' => 'required'
    );

    public function getData(){
return $this->user->id;
    }
    public function getUser(){
        return $this->user->name;
    }
    public function user(){
        return $this->belongsTo('App\User');
    }

}
