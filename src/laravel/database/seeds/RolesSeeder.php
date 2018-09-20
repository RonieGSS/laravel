<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         app()['cache']->forget('spatie.permission.cache');

        $role = Role::create(['name' => 'owner']);
        $role->givePermissionTo('product-list');
        $role->givePermissionTo('product-delete');
        $role->givePermissionTo('product-create');
        $role->givePermissionTo('product-edit');

        $role = Role::create(['name' => 'product-owner']);
        $role->givePermissionTo('product-list');
        $role->givePermissionTo('product-delete');
        $role->givePermissionTo('product-create');
        $role->givePermissionTo('product-edit');

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
