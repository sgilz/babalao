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
                "specs" => json_encode([
                    "Cores",
                    "Threads",
                    "Base Clock",
                    "Turbo Clock"
                ])
            ],
            [
                "id" => 2,
                "name" => "Video Graphic Devices",
                "specs" => json_encode([
                    "Base clock",
                    "Boost clock",
                    "Memory",
                    "Memory clock"
                ])
            ],
            [
                "id" => 3,
                "name" => "Motherboards",
                "specs" => json_encode([
                    "CPU support",
                    "Socket",
                    "Size",
                    "Memory support",
                    "Expansion slots",
                    "Video ports",
                    "Rear USB",
                    "Storage",
                    "Network"
                ])
            ],
            [
                "id" => 4,
                "name" => "Memory",
                "specs" => json_encode([
                    "Capacity",
                    "Speed",
                    "Timing",
                    "CAS Latency",
                    "Voltage"
                ])
            ],
            [
                "id" => 5,
                "name" => "Solid State Drives",
                "specs" => json_encode([
                    "Capacity",
                    "Memory",
                    "Interface",
                    "Seq. read",
                    "Seq. write"
                ])
            ],
            [
                "id" => 6,
                "name" => "Power supply units",
                "specs" => json_encode([
                    "Type",
                    "Maximum Power",
                    "Efficiency rating",
                    "Modularity"
                ])
            ]
        ];

        foreach ($categories as $key => $category) {
            Category::updateOrCreate($category);
        }
    }
}
