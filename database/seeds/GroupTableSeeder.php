<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = new Group;
        $a->name = "Computer Science";
        $a->save();

        $b = new Group;
        $b->name = "Engineering";
        $b->save();

        $c = new Group;
        $c->name = "Economics";
        $c->save();

        $d = new Group;
        $d->name = "Chemistry";
        $d->save();

        $groups = App\Group::all();

        App\BlogUser::all()->each(function ($blogUser) use ($groups) { 
            $blogUser->groups()->attach(
                $groups->random(rand(1, 4))->pluck('id')->toArray()
            ); 
        });
    }
}
