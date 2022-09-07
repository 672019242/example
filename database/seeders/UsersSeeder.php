<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                

        collect([

            [
                'name' => 'All',
                'email' => 'alll@elala.com',
                'password' => bcrypt('password'),
                'email_verified_at' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
    
            ],
            [
                'name' => 'Lii',
                'email' => 'lili@lulu.com',
                'password' => bcrypt('password'),
                'email_verified_at' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
    
            ],
            ])->each(function ($user){
    
                DB::table('users')->insert($user);
    
            });
    }
}
