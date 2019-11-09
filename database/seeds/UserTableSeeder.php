<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = new User;
        $a->name = 'Raj';
        $a->email = '957457@swansea.ac.uk';
        $a->password = 'secret';
        $a->auth_level = 'admin';
        $a->blog_user_id = 1;
        $a->save();

    }
}
