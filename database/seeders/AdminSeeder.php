<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        admin::truncate();

        admin::create([
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}