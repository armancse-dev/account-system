<?php

use Illuminate\Database\Seeder;
use App\Head;

class HeadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $heads =[
            [
                'name' => 'admission fee'
            ],
            [
                'name' => 'tution fee'
            ],

            [
                'name' => 'Semester fee'
            ],
            [
                'name' => 'Lab fee'
            ],
            [
                'name' => 'Internship'
            ]
        ];

        foreach ($heads as $head){
            Head::create($head);
        }



    }
}
