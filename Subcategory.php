<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'sub_categories';

    public function category()
    {
        return $this->belongsTo(Tree::class, 'categories_id');
    }
}
