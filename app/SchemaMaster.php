<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchemaMaster extends Model
{
    protected $table = 'schema_masters';
   	public $fillable =['id','name','session'];

   	public function schemadetail(){
   	    return $this->hasMany('App\SchemaDetail');
    }

}
