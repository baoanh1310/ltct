<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['id','contact_name','contact_value','icon','color','status'];
    public $timestamps = false;
}
