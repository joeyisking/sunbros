<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'body'];

    public static function getPostsByType($type){

        return DB::table('posts')->where('entity_type', $type)->get();

    }
}