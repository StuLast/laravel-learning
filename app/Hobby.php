<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function tags() {
        return $this->BelongsToMany('App\Tag');
    }

    protected $fillable = [
        'name', 'description'
    ];
}
