<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User; 

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                
        User::factory()->count(10)->create();
        // collect([

        //     [
        //         'name' => 'All',
        //         'email' => 'alll@elala.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => Carbon::now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
    
        //     ],
        //     [
        //         'name' => 'Lii',
        //         'email' => 'lili@lulu.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => Carbon::now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
    
        //     ],
        //     ])->each(function ($user){
    
        //         DB::table('users')->insert($user);
    
        //     });
    }
}
