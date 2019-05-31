<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    public function level()
    {
        return $this->belongsTo('App\Level', 'levels_id');
    }
}