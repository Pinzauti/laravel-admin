<?php

use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $roles = ['Administrator', 'Moderator', 'Editor', 'Squad Member', 'User'];

    public function run()
    {

        foreach($this->roles as $role)
        {
            \HttpOz\Roles\Models\Role::create([
                'name' => $role,
                'slug' => str_slug($role),
            ]);
        }

    }
}
