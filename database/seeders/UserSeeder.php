<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->nama_lengkap = 'adminsmk';
        $user->nis = 'admin';
        $user->password = Hash::make('password');
        $user->role = 'admin';
        $user->save();
    }
}
