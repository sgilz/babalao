<?php

use Illuminate\Database\Seeder;
use App\Models\CreditCard;

class CreditCardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CreditCard::class,8)->create();
    }
}
