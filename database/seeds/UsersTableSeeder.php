<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->type='patient'; 
        $user->name='user'; 
        $user->password=bcrypt('user');
        $user->email='user@user.pl';
        $user->address='Wroclaw';
        $user->location='Polska';
        $user->sex='K';
        $user->save();

        $user = new \App\User();
        $user->type='doctor'; 
        $user->name='userd'; 
        $user->password=bcrypt('userd');
        $user->email='userd@user.pl';
        $user->save();

        $user = new \App\User();
        $user->type='investigator'; 
        $user->name='useri'; 
        $user->password=bcrypt('useri');
        $user->email='useri@user.pl';
        $user->save();

    }
}
