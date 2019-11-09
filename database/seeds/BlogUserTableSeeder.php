<?php

use App\BlogUser;
use Illuminate\Database\Seeder;

class BlogUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = new BlogUser;
        $a->name = "Dan";
        $a->date_of_birth = "2001-03-15 02:00:49";
        $a->status = "I like animals";
        $a->phone_number = "(888) 937-7238";
        $a->save();

        factory(App\BlogUser::class, 50)->create();
    }
}
