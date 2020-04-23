<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function categorie() {
        return $this->belongsTo('App\Categorie', 'categories_id');
    }
    public function user() {
        return $this->belongsTo('App\User', 'users_id');
    }
}
