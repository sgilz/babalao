<?php

use Illuminate\Database\Seeder;
use App\Models\CreditCard;
use App\Models\Item;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CreditCard::class);
    }
}
