<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [

            'view dashboard',
            'manage users',
            'manage settings',
            'manage about',
            'manage blogs',
            'manage faq',
            'view analytics',

        ];

        foreach ($permissions as $permission) {

            Permission::firstOrCreate([
                'name' => $permission
            ]);
        }

        $superAdmin = Role::firstOrCreate([
            'name' => 'Super Admin'
        ]);

        $admin = Role::firstOrCreate([
            'name' => 'Admin'
        ]);

        $superAdmin->givePermissionTo(
            Permission::all()
        );

        $admin->givePermissionTo([
            'view dashboard',
            'manage blogs',
            'manage faq',
            'manage about',
            'view analytics',
        ]);
    }
}
