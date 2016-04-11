<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = array('note');

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
