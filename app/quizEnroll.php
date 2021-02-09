<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quizEnroll extends Model
{
    //
    protected $table='quiz_enrolls';
    protected $primaryKey='quiz_id';
    public $timestamps=false;
}
