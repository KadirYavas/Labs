<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function categorie() {
        return $this->belongsTo('App\Categorie', 'categorie_id');
    }
    public function user() {
        return $this->belongsTo('App\User', 'users_id');
    }
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
    public function commentaires() {
        return $this->hasMany('App\Commentaire', 'article_id');
    }
}
