<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Author';
        $role->slug = 'author';
        $role->permissions = ['create-post' => true];
        $role->save();

        $role = new Role();
        $role->name = 'Editor';
        $role->slug = 'editor';
        $role->permissions = ['update-post' => true, 'publish-post' => true];
        $role->save();
    }
}
