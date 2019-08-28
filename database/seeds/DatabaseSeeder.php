<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call(housesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
