<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(TechnologyTableSeeder::class);
         $this->call(SessionTableSeeder::class);
         $this->call(SemesterTableSeeder::class);
          $this->call(UsersTableSeeder::class);
         $this->call(StudentTableSeeder::class);
         $this->call(HeadTableSeeder::class);
         $this->call(SchemaMasterTableSeeder::class);
         $this->call(SchemaDetailTableSeeder::class);
         $this->call(PaymentTableSeeder::class);
    }
}
