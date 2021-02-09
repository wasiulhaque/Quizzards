<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userTable extends Model
{
    //
    protected $table="user_tables";
    protected $primaryKey="user_id";
    public $timestamps=false;


}
