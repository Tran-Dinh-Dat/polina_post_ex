<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $author = Role::where('slug', 'author')->first();
        $editor = Role::where('slug', 'editor')->first();

        $user1 = User::create([
            'name' => 'Author 01',
            'email' => 'author1@gmail.com',
            'password' => bcrypt('123123')
        ]);
        $user1->roles()->attach($author);

        $user2 = User::create([
            'name' => 'Author 02',
            'email' => 'author2@gmail.com',
            'password' => bcrypt('123123')
        ]);
        $user2->roles()->attach($author);

        $user3 = User::create([
            'name' => 'Editor1',
            'email' => 'editor1@gmail.com',
            'password' => bcrypt('123123')
        ]);
        $user3->roles()->attach($editor);
    }
}
