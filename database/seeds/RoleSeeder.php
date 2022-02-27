<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;

class RoleSeeder extends Seeder
{
    use HasRoles;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =  Role::create([
            'name' => 'admin'
        ]);
        $adminpermission = Permission::create(['name' => 'Manage overall workflow']);
        $adminpermission->assignRole($admin);

        $customer =Role::create([
            'name' => 'customer'
        ]);
        $customerpermission = Permission::create(['name' => 'Manage overall workflow']);
        $customerpermission->assignRole($customer);
    }


}
