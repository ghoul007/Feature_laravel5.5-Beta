<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
protected $table= "posts";
protected $primaryKey = 'id';
protected  $fillable = ['name','description','user_id'];
public  $timestamps = true;
}
