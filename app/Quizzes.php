<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizzes extends Model
{
    protected $table = 'quizzes';

    public function appUsers()
    {
        return $this->belongsTo('App\AppUsers');
    }
}