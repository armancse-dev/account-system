<?php

use Illuminate\Database\Seeder;
use App\SchemaMaster;

class SchemaMasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scm = [
            [
                'name' => 'Semester fee 2019-20',
                'session' => '2019-20',
                'active' => '1'
            ],
             [
                'name' => 'tution fee 2019-20',
                'session' => '2019-20',
                'active' => '1'
            ],
            [
                'name' => 'admission fee 2019-20',
                'session' => '2019-20',
                'active' => '1'
            ],
             [
                'name' => 'Lab fee 2019-20',
                'session' => '2019-20',
                'active' => '1'
            ]
        ];

        foreach ($scm as $scm){
            SchemaMaster::create($scm);
        }
    }
}
