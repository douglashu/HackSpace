<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeNews extends Model{
    //Table
    protected $table = 'home_news';
    //Primery key
    protected $primaryKey = 'id';
    //uses auto datestamp
    public $timestamps = false;
}