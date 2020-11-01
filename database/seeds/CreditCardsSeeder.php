<?php

/*
 * @author    Santiago Gil Zapata sgilz@eafit.edu.co
 */

use Illuminate\Database\Seeder;
use App\Models\CreditCard;

class CreditCardsSeeder extends Seeder
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
