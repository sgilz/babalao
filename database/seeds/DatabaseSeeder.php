<?php

use Illuminate\Database\Seeder;
use App\Models\CreditCard;
use App\Models\Item;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(CreditCard::class);
        $this->call(Item::class);
    }
}
