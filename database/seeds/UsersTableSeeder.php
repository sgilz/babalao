<?php

/*
 * @author Manuel Gutierrez magutierrm@eafit.edu.co
 */

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,8)->create();
    }
}
