<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            [
                "id" => 1,
                "name" => "CPUs / Processors",
                "specs" => [
                    "Cores",
                    "Threads",
                    "Base Clock",
                    "Turbo Clock"
                ]
            ],
            [
                "id" => 2,
                "name" => "Video Graphic Devices",
                "specs" => [
                    "Base clock",
                    "Boost clock",
                    "Memory",
                    "Memory clock"
                ]
            ],
            [
                "id" => 3,
                "name" => "Motherboards",
                "specs" => [
                    "CPU support",
                    "Socket",
                    "Size",
                    "Memory support",
                    "Expansion slots",
                    "Video ports",
                    "Rear USB",
                    "Storage",
                    "Network"
                ]
            ],
            [
                "id" => 4,
                "name" => "Memory",
                "specs" => [
                    "Capacity",
                    "Speed",
                    "Timing",
                    "CAS Latency",
                    "Voltage"
                ]
            ],
            [
                "id" => 5,
                "name" => "Solid State Drives",
                "specs" => [
                    "Capacity",
                    "Memory",
                    "Interface",
                    "Seq. read",
                    "Seq. write"
                ]
            ],
            [
                "id" => 6,
                "name" => "Power supply units",
                "specs" => [
                    "Type",
                    "Maximum Power",
                    "Efficiency rating",
                    "Modularity"
                ]
            ]
        ];

        foreach ($categories as $key => $category) {
            Category::updateOrCreate($category);
        }
    }
}
