<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchemaDetail extends Model
{
    protected $table = 'schema_details';
   	public $fillable =['schema_master_id','head_id','amount','type','number_of_payment'];

    public function schema_master(){
        return $this->belongsTo('App\SchemaMaster');
    }

    public function head(){
        return $this->belongsTo('App\Head');
    }

}
