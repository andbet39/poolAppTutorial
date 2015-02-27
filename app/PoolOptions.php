<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PoolOptions extends Model {

    protected $table = 'pooloptions';

    protected $fillable = ['title','pool_id','vote'];


}
