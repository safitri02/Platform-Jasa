<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'               => 'Safitri',
                'email'              => 'safitri02@gmail.com',
                'password'           => Hash::make('safitri02'),
                'remember_token'     => null,
                'created_at'         => date('Y-m-d h-i-s'),
                'updated_at'         => date('Y-m-d h-i-s') 
            ],
            [
                'name'               => 'Arief Zufar',
                'email'              => 'ariefzufar@gmail.com',
                'password'           => Hash::make('arief02'),
                'remember_token'     => null,
                'created_at'         => date('Y-m-d h-i-s'),
                'updated_at'         => date('Y-m-d h-i-s') 
            ]
        ];

        User::insert($user);
    }
}
