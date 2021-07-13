<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{


    protected $table = 'students';
   	public $fillable =['name','roll','registration_no','technology_id','session_id','semester_id','mobile_no','user_id','status'];

   	public function waivers(){
   	    return $this->belongsTo('App\Waiver');
    }

    public function technology(){
   	    return $this->belongsTo('App\Technology');
    }

    public function session(){
        return $this->belongsTo('App\session');
    }

    public function semester(){
        return $this->belongsTo('App\semester');
    }

    public function payment(){
   	    return $this->hasMany('App\Payment');
    }


}
