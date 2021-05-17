<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('roles')->insert([
            ['name'=>'chairperson'],
            ['name'=>'vchairperson' ],
            ['name'=>'secretary'],
            ['name'=>'vsecretary'],
            ['name'=>'organizingsecretary'],
            ['name'=>'vorganizingsecretary'],
            ['name'=>'treasurer'],
            ['name'=>'vtreasurer'],
        ]

        );
    }
}
