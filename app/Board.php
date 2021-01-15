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

}
