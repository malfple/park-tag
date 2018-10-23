<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@admin',
            'password' => 'admin'
        ]);
    }
}
