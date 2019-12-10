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
        //$a = new User;
        //$a->name = 'Raj';
        //$a->email = '957457@swansea.ac.uk';
        //$a->password = 'secret';
        //$a->save();

        factory(App\User::class, 5)->create();
    }
}
