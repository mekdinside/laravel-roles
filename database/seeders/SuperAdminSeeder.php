<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'name' => 'Rivo',
            'email' => 'superadmin@roles.id',
            'password' => Hash::make('123456'),
        ]);
        $superAdmin->assignRole('Super Admin');

        $admin = User::create([
            'name' => 'Meri',
            'email' => 'admin@roles.id',
            'password' => Hash::make('123456'),       
        ]);
        $admin->assignRole('Admin');

        $productManager = User::create([
            'name' => 'Fahri',
            'email' => 'operator@roles.id',
            'password' => Hash::make('123456'),
        ]);
        $productManager->assignRole('Operator');

        $adminBaak = User::create([
            'name' => 'admin baak',
            'email' => 'baak@roles.id',
            'password' => Hash::make('123456'),
        ]);
        $adminBaak->assignRole('Admin BAAK');

        $adminKeuangan = User::create([
            'name' => 'admin keuangan',
            'email' => 'keuangan@roles.id',
            'password' => Hash::make('123456'),
        ]);
        $adminKeuangan->assignRole('Admin Keuangan');

        $mahasiswa = User::create([
            'name' => 'Ridho',
            'email' => 'mahasiswa@roles.id',
            'password' => Hash::make('123456'),
            'userType' => 1
        ]);
        $mahasiswa->assignRole('Mahasiswa');
    }
}
