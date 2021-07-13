<?php

namespace App\library;
use Illuminate\Support\Facades\DB;

class GetFunction{

    public static function get_technologies(){
        $technologies = DB::table('technologies')->select('id','name','code')->get();
        return $technologies;
    }

    public static function get_semesters(){
        $semesters = DB::table('semesters')->select('id','name')->get();
        return $semesters;
    }

    public static function get_sessions(){
        $sessions = DB::table('sessions')->select('id','session_year')->get();
        return $sessions;
    }


    public static function get_waivers(){
        $waivers = DB::table('waivers')->select('id','name','amount')->get();
        return $waivers;
    }

    public static function get_payment_schemas(){
        $payment_schemas = DB::table('payment_schemas')->select('id','name','amount')->get();
        return $payment_schemas;
    }

    public static function get_students(){
        $students = DB::table('students')->select('id','name','roll','registration_no','technology_id','session_id','semester_id','user_id','status')->get();
        return $students;
    }


}
