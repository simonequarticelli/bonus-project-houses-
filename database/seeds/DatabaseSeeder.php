<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(housesTableSeeder::class);
<<<<<<< Updated upstream
        
=======
        $this->call(rolesTableSeeder::class);
>>>>>>> Stashed changes
    }
}
