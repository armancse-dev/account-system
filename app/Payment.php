<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
   	public $fillable =['id','student_id','semester_id','amount','head_id','transaction_type','payment_type'];

    public function student(){
        return $this->belongsTo('App\Student');
    }

    public function head(){
        return $this->belongsTo('App\Head');
    }

    public function semester(){
        return $this->belongsTo('App\semester');
    }




}
