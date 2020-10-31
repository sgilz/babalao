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
                    "Base Clock",
                    "Cores",
                    "Threads",
                    "Turbo Clock",
                ]
            ],
            [
                "id" => 2,
                "name" => "Video Graphic Devices",
                "specs" => [
                    "Base clock",
                    "Boost clock",
                    "Memory clock",
                    "Memory",
                ]
            ],
            [
                "id" => 3,
                "name" => "Motherboards",
                "specs" => [
                    "CPU support",
                    "Expansion slots",
                    "Memory support",
                    "Network",
                    "Rear USB",
                    "Size",
                    "Socket",
                    "Storage",
                    "Video ports",
                ]
            ],
            [
                "id" => 4,
                "name" => "Memory",
                "specs" => [
                    "CAS Latency",
                    "Capacity",
                    "Speed",
                    "Timing",
                    "Voltage",
                ]
            ],
            [
                "id" => 5,
                "name" => "Solid State Drives",
                "specs" => [
                    "Capacity",
                    "Interface",
                    "Memory",
                    "Seq. read",
                    "Seq. write",
                ]
            ],
            [
                "id" => 6,
                "name" => "Power supply units",
                "specs" => [
                    "Efficiency rating",
                    "Maximum Power",
                    "Modularity",
                    "Type",
                ]
            ]
        ];

        foreach ($categories as $key => $category) {
            Category::updateOrCreate([
                'id' => $category['id']
            ],$category);
        }
    }
}
