<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $operator = Role::create(['name' => 'Operator']);
        $admin_baak = Role::create(['name' => 'Admin Baak']);
        $admin_keuangan = Role::create(['name' => 'Admin Keuangan']);
        $mahasiswa = Role::create(['name' => 'Mahasiswa']);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-product',
            'edit-product',
            'delete-product'
        ]);

        $operator->givePermissionTo([
            'create-product',
            'edit-product',
            'delete-product'
        ]);

        $admin_baak->givePermissionTo([
            'create-mahasiswa',
            'edit-mahasiswa',
            'delete-mahasiswa',
            'show-mahasiswa'
        ]);

        $admin_keuangan->givePermissionTo([
            'show-mahasiswa'
        ]);

        $mahasiswa->givePermissionTo([
            'edit-mahasiswa',
            'show-mahasiswa'
        ]);
    }
}