<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    protected $table = 'heads';
   	public $fillable =['id','name'];

   	public function schemadetail(){
   	    return $this->belongsTo('App\Head');
    }
    public function payment(){
        return $this->hasMany('App\Payment');
    }
}
