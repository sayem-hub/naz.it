<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Abu Sayem',
            'designation' => 'Sr. Executive',
            'office_id' =>'MA-1004',
            'phone' => '01770716151',
            'email' => 'sayem.it@nz-bd.com',
            'password' =>Hash::make('Admin.963'),
            'department' => 'ICT',
            'section' => 'IT',
            'company' => 'NAZ Bangladesh Ltd.',
            'role' => 'admin',
        ]);
    }
}
