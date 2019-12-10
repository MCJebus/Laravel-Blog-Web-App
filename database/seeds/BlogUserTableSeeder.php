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
        $a->name = "Dan Bilzerian";
        $a->date_of_birth = "2001-03-15 02:00:49";
        $a->status = "I like animals";
        $a->phone_number = "(888) 937-7238";
        $a->user_id = 1;
        $a->save();

        $b = new BlogUser;
        $b->name = "Jerry Springer";
        $b->date_of_birth = "1998-02-09 02:00:49";
        $b->status = "I hate animals";
        $b->phone_number = "(201) 826-6127";
        $b->user_id = 2;
        $b->save();

        $c = new BlogUser;
        $c->name = "Jeremy Clarkson";
        $c->date_of_birth = "1990-01-08 02:00:49";
        $c->status = "I'm a car guy";
        $c->phone_number = "(118) 715-5016";
        $c->user_id = 3;
        $c->save();

        $d = new BlogUser;
        $d->name = "Richard Hammond";
        $d->date_of_birth = "2003-10-10 02:00:49";
        $d->status = "I'm a bike guy";
        $d->phone_number = "(113) 999-0178";
        $d->user_id = 4;
        $d->save();

        $e = new BlogUser;
        $e->name = "Amelia Earheart";
        $e->date_of_birth = "2006-10-01 02:00:49";
        $e->status = "I'm a plane woman";
        $e->phone_number = "(555) 555-1111";
        $e->user_id = 5;
        $e->save();

        //factory(App\BlogUser::class, 10)->create();
    }
}
