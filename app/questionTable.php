<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\False_;

class questionTable extends Model
{

    protected $table="question_tables";
    protected $primaryKey="question_id";
    public $timestamps=False;
    //
}
