<?php

use Illuminate\Database\Seeder;
use App\student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $students = [
        	[
        		'name' => "arman",
        		'roll' => "800378",
        		'registration_no' => "84715",
        		'technology_id' => "1",
        		'semester_id' => "1",
        		'session_id' => "1",
        		'user_id' => "1",
        		'status' => "0",
        	],
            [
                'name' => "Imran",
                'roll' => "800379",
                'registration_no' => "84714",
                'technology_id' => "2",
                'semester_id' => "2",
                'session_id' => "2",
                'user_id' => "1",
                'status' => "0",
            ],

            [
                'name' => "showan",
                'roll' => "2817",
                'registration_no' => "2819",
                'technology_id' => "2",
                'semester_id' => "2",
                'session_id' => "2",
                'user_id' => "1",
                'status' => "0",
            ]



        ];

        foreach ($students as $student){
           student::create($student);
       }

    }
}
