<?php

use Illuminate\Database\Seeder;
use App\SchemaDetail;

class SchemaDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sd = [
            [
                'schema_master_id' => 1,
                'head_id' => 1,
                'amount' => 9500,
                'type' => 'fix',
                'number_of_payment' => 8
            ],
            [
                'schema_master_id' => 2,
                'head_id' => 2,
                'amount' => 1500,
                'type' => 'fix',
                'number_of_payment' => 48
            ],

            [
                'schema_master_id' => 3,
                'head_id' => 3,
                'amount' => 15000,
                'type' => 'fix',
                'number_of_payment' => 1
            ]
        ];

        foreach ($sd as $sd){
            SchemaDetail::create($sd);
        }
    }
}
