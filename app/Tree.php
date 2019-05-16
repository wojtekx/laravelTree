<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    protected $fillable = [
        'nazwa',
    ];
    public function childs() {
        return $this->hasMany('App\Tree','parent_id') ;
}
}
