<?php

namespace Database\Seeders;
use App\Models\DetailUser;
use Illuminate\Database\Seeder;

class DetailUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detailUser = [
            [
                'users_id'           => 1,
                'photo'              => '',
                'role'               => 'Website Developer',
                'contact_number'     => null,
                'biography'          => null,
                'created_at'         => date('Y-m-d h-i-s'),
                'updated_at'         => date('Y-m-d h-i-s') 
            ], [
                'users_id'           => 2,
                'photo'              => '',
                'role'               => 'UI/UX Designer',
                'contact_number'     => null,
                'biography'          => null,
                'created_at'         => date('Y-m-d h-i-s'),
                'updated_at'         => date('Y-m-d h-i-s') 
            ]
        ];
        DetailUser::insert($detailUser);
    }
}
