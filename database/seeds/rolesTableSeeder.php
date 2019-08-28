<?php

use App\Role;
use Illuminate\Database\Seeder;

class rolesTableSeeder extends Seeder
{
    
    public function run()
    {
        $owner = new Role();
        $owner->name = 'pippo';
        $owner->save();
    }
}
