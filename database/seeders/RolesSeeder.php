<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Role::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $author = Role::create([
            'name' => 'Author',
            'slug' => 'author',
            'permissions' => [
                'post.create'=> true,
            ]
        ]);

        $editor = Role::create([
            'name' => 'Editor',
            'slug' => 'editor',
            'permissions' => [
                'post.update'=> true,
                'post.publish'=> true
            ]
        ]);
    }
}
