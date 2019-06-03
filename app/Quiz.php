<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quizzes';
    

    public function appUsers()
    {
        return $this->belongsTo('App\AppUsers');
    }

    public function questions()
    {
        return $this->hasMany('App\Question', 'quizzes_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'quizzes_has_tags', 'quizzes_id', 'tags_id');
    }
}