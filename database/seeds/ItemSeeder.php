<?php

/*
 * @author    Santiago Gil Zapata sgilz@eafit.edu.co
 */

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Item::class,8)->create();
    }
}
