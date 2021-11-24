<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 'name' => 'Alfredo Morales',
        'email' => 'info@diarioprogramador.com',
        'email_verified_at' => Carbon::now(),
        'password' => Hash::make('123456'),
        'admin' => true,
        'created_at' => Carbon::now(),
        'updated_at'=> Carbon::now(),
    ]);

        DB::table('users')->insert([
            'name' => 'Usuario de Prueba',
            'email' => 'user@diarioprogramador.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456'),
            'admin' => false,
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now(),
         ]);
    }
}
