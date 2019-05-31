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
}