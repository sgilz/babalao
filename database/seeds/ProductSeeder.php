<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        //
        $products = [
            [
                "id" => 1,
                "name" => "Intel Core i7 10700K",
                "brand" => "Intel",
                "price" => 377,
                "category_id" => 1,
                "specs" => [
                    "Cores" => "8",
                    "Threads" => "16",
                    "Base Clock" => "3.8GHz",
                    "Turbo Clock" => "5.1GHz"
                ]
            ],
            [
                "id" => 2,
                "name" => "Intel Core i9 10900K",
                "brand" => "Intel",
                "price" => 746,
                "category_id" => 1,
                "specs" => [
                    "Cores" => "10",
                    "Threads" => "20",
                    "Base Clock" => "3.7GHz",
                    "Turbo Clock" => "5.3GHz"
                ]
            ],
            [
                "id" => 3,
                "name" => "AMD Ryzen 9 3900X",
                "brand" => "AMD",
                "price" => 729,
                "category_id" => 1,
                "specs" => [
                    "Cores" => "12",
                    "Threads" => "24",
                    "Base Clock" => "3.8GHz",
                    "Turbo Clock" => "5.3GHz"
                ]
            ],
            [
                "id" => 4,
                "name" => "AMD Ryzen 7 3700X",
                "brand" => "AMD",
                "price" => 305,
                "category_id" => 1,
                "specs" => [
                    "Cores" => "8",
                    "Threads" => "16",
                    "Base Clock" => "3.6GHz",
                    "Turbo Clock" => "4.4GHz"
                ]
            ],
            [
                "id" => 5,
                "name" => "Intel Core i5 9400F",
                "brand" => "Intel",
                "price" => 139,
                "category_id" => 1,
                "specs" => [
                    "Cores" => "6",
                    "Threads" => "6",
                    "Base Clock" => "2.9GHz",
                    "Turbo Clock" => "4.1GHz"
                ]
            ],
            [
                "id" => 6,
                "name" => "Nvidia GeForce RTX 3080",
                "brand" => "Nvidia",
                "price" => 339,
                "category_id" => 2,
                "specs" => [
                    "Base clock" => "1,440MHz",
                    "Boost clock" => "1,710MHz",
                    "Memory" => "10GB GDDR6X",
                    "Memory clock" => "19 GT/s"
                ]
            ],
            [
                "id" => 7,
                "name" => "Nvidia GeForce RTX 2070 Super",
                "brand" => "Nvidia",
                "price" => 859,
                "category_id" => 2,
                "specs" => [
                    "Base clock" => "1,605MHz",
                    "Boost clock" => "1,770MHz",
                    "Memory" => "8GB GDDR6",
                    "Memory clock" => "14 GT/s"
                ]
            ],
            [
                "id" => 8,
                "name" => "AMD Radeon RX 5700",
                "brand" => "AMD",
                "price" => 399,
                "category_id" => 2,
                "specs" => [
                    "Base clock" => "1,465MHz",
                    "Boost clock" => "1,725MHz",
                    "Memory" => "8GB GDDR6",
                    "Memory clock" => "14 GT/s"
                ]
            ],
            [
                "id" => 9,
                "name" => "AMD Radeon RX 5600 XT",
                "brand" => "AMD",
                "price" => 279,
                "category_id" => 2,
                "specs" => [
                    "Base clock" => "1,375MHz",
                    "Boost clock" => "1,750MHz",
                    "Memory" => "6GB GDDR6",
                    "Memory clock" => "12 - 14GT/s"
                ]
            ],
            [
                "id" => 10,
                "name" => "Nvidia GeForce GTX 1660 Super",
                "brand" => "Nvidia",
                "price" => 285,
                "category_id" => 2,
                "specs" => [
                    "Base clock" => "1,530MHz",
                    "Boost clock" => "1,785MHz",
                    "Memory" => "6GB GDDR6",
                    "Memory clock" => "14GT/s"
                ]
            ],
            [
                "id" => 11,
                "name" => "ROG Maximus XII Extreme",
                "brand" => "Asus",
                "price" => 849,
                "category_id" => 3,
                "specs" => [
                    "CPU support" => "Intel 10th Gen",
                    "Socket" => "LGA 1200",
                    "Size" => "Extended ATX",
                    "Memory support" => "4x DIMM, up to 128GB, DDR4-4700",
                    "Expansion slots" => "2x PCIe 3.0 x16",
                    "Video ports" => "2x Thunderbolt 3 ports on extension card (DP1.4)",
                    "Rear USB" => "10x USB 3.2, 2x USB 2.0",
                    "Storage" => "2x M.2, 2x M.2 (DIMM.2 board)",
                    "Network" => "1x 10Gb Marvell ethernet, 1x Intel ethernet, Intel Wi-Fi 6 wireless"
                ]
            ],
            [
                "id" => 12,
                "name" => "MPG Z490 Gaming Carbon WiFi",
                "brand" => "MSI",
                "price" => 263,
                "category_id" => 3,
                "specs" => [
                    "CPU support" => "Intel 10th Gen",
                    "Socket" => "LGA 1200",
                    "Size" => "ATX",
                    "Memory support" => "4x DIMM, up to 128GB, DDR4-4800 (OC)",
                    "Expansion slots" => "3x PCIe 3.0 (x16/x0/x4 or x8/x8/x4), 2x PCIe 3.0 x1",
                    "Video ports" => "1x DisplayPort, 1x HDMI",
                    "Rear USB" => "5x USB 3.2, 2x USB 2.0",
                    "Storage" => "2x M.2, 6x SATA 6Gbps",
                    "Network" => "1x 2.5Gb LAN, Intel Wi-Fi 6 wireless"
                ]
            ],
            [
                "id" => 13,
                "name" => "MAG B460M Mortar WiFi",
                "brand" => "MSI",
                "price" => 161,
                "category_id" => 3,
                "specs" => [
                    "CPU support" => "Intel 10th Gen",
                    "Socket" => "LGA 1200",
                    "Size" => "Micro ATX",
                    "Memory support" => "4x DIMM, up to DDR4-2933 (i7,i9) or DDR4-2666 (i5",
                    "Expansion slots" => "2x PCIe 3.0 x16, 1x PCIe 3.0 x1",
                    "Video ports" => "1x DisplayPort, 1x HDMI",
                    "Rear USB" => "4x USB 3.2 Gen (1x Type-C), 2x USB 2.0",
                    "Storage" => "2x M.2, 6x SATA 6Gbps",
                    "Network" => "Realtek 2.5Gb LAN, Intel Wi-Fi 6 wireless"
                ]
            ],
            [
                "id" => 14,
                "name" => "B460 Steel Legend",
                "brand" => "ASRock",
                "price" => 99,
                "category_id" => 3,
                "specs" => [
                    "CPU support" => "Intel 10th Gen",
                    "Socket" => "LGA 1200",
                    "Size" => "ATX",
                    "Memory support" => "4x DIMM, up to DDR4-2933 (i7,i9) or DDR4-2666 (i5)",
                    "Expansion slots" => "2x PCIe 3.0 x16, 1x PCIe 3.0 x1",
                    "Video ports" => "1x DisplayPort, 1x HDMI",
                    "Rear USB" => "4x USB 3.2 Gen (1x Type-C), 2x USB 2.0",
                    "Storage" => "2x M.2, 6x SATA 6Gbps",
                    "Network" => "Realtek 2.5Gb LAN"
                ]
            ],
            [
                "id" => 15,
                "name" => "Z390 Aorus Ultra",
                "brand" => "Gigabyte",
                "price" => 249,
                "category_id" => 3,
                "specs" => [
                    "CPU support" => "Intel 8th and 9th Gen",
                    "Socket" => "LGA 1151",
                    "Size" => "ATX",
                    "Memory support" => "4x DIMM, up to 128GB, DDR4-4400 (OC)",
                    "Expansion slots" => "PCIe x16, PCIe x16 (x8), PCIe x16 (x4), 3x PCIe x1",
                    "Video ports" => "HDMI",
                    "Rear USB" => "4x USB 3.2 Gen2 (1x Type-C), 2x USB 3.1 Gen1, 4x USB 2.0",
                    "Storage" => "3x M.2, 6x SATA",
                    "Network" => "Ethernet, 1.73Gbps 802.11ac wireless"
                ]
            ],
            [
                "id" => 16,
                "name" => "XTREEM ARGB 16GB DDR4-3600MHz C14",
                "brand" => "TEAMGROUP",
                "price" => 135,
                "category_id" => 4,
                "specs" => [
                    "Capacity" => "2x 8GB",
                    "Speed" => "DDR4-3600MHz",
                    "Timing" => "14-15-15-35",
                    "CAS Latency" => "14",
                    "Voltage" => "1.45v"
                ]
            ],
            [
                "id" => 17,
                "name" => "Dominator Platinum RGB 32GB DDR4-3200MHz",
                "brand" => "Corsair",
                "price" => 249,
                "category_id" => 4,
                "specs" => [
                    "Capacity" => "2x 16GB",
                    "Speed" => "DDR4-3200MHz",
                    "Timing" => "16-18-18-36",
                    "CAS Latency" => "16",
                    "Voltage" => "1.35V"
                ]
            ],
            [
                "id" => 18,
                "name" => "Trident Z Royal 16GB DDR4-4000MHz",
                "brand" => "G.Skill",
                "price" => 159,
                "category_id" => 4,
                "specs" => [
                    "Capacity" => "2x 16GB",
                    "Speed" => "DDR4-3600MHz",
                    "Timing" => "18-22-22-42",
                    "CAS Latency" => "18",
                    "Voltage" => "1.35V"
                ]
            ],
            [
                "id" => 19,
                "name" => "Z390 Trident Z Royal 16GB DDR4-4000MHz",
                "brand" => "Gigabyte",
                "price" => 244,
                "category_id" => 4,
                "specs" => [
                    "Capacity" => "2x 8GB",
                    "Speed" => "DDR4-4000MHz",
                    "Timing" => "15-16-16-36",
                    "CAS Latency" => "15",
                    "Voltage" => "1.5V"
                ]
            ],
            [
                "id" => 20,
                "name" => "Ripjaws V 16GB DDR4-2400MHz",
                "brand" => "G.Skill",
                "price" => 46,
                "category_id" => 4,
                "specs" => [
                    "Capacity" => "2x 8GB",
                    "Speed" => "DDR4-2400MHz",
                    "Timing" => "15-15-15-35",
                    "CAS Latency" => "15",
                    "Voltage" => "1.2V"
                ]
            ],
            [
                "id" => 21,
                "name" => "S70",
                "brand" => "Addlink",
                "price" => 136,
                "category_id" => 5,
                "specs" => [
                    "Capacity" => "256GB, 512GB, 1TB, 2TB",
                    "Memory"  => "Toshiba 3D TLC",
                    "Interface"  => "M.2 PCIe 3.0 x4",
                    "Seq. read"  => "3,400MB/s (512GB version)",
                    "Seq. write"  => "2,000MB/s (512GB version)"
                ]
            ],
            [
                "id" => 22,
                "name" => "Black SN750 1TB",
                "brand" => "Western Digital",
                "price" => 129,
                "category_id" => 5,
                "specs" => [
                    "Capacity" => "1TB",
                    "Memory"  => "SanDisk/Toshiba 3D TLC",
                    "Interface"  => "M.2 PCIe 3.0 x4",
                    "Seq. read"  => "3,470MB/s",
                    "Seq. write"  => "3,000MB/s"
                ]
            ],
            [
                "id" => 23,
                "name" => "970 EVO Plus 500GB",
                "brand" => "Samsung",
                "price" => 187,
                "category_id" => 5,
                "specs" => [
                    "Capacity" => "500GB",
                    "Memory"  => "Samsung 3-bit MLC",
                    "Interface"  => "M.2 PCIe 3.0 x4",
                    "Seq. read"  => "3,500MB/s",
                    "Seq. write"  => "3,200MB/s"
                ]
            ],
            [
                "id" => 24,
                "name" => "MX500",
                "brand" => "Crucial",
                "price" => 109,
                "category_id" => 5,
                "specs" => [
                    "Capacity" => "1TB",
                    "Memory"  => "Micron TLC",
                    "Interface"  => "SATA 6Gb/s",
                    "Seq. read"  => "560MB/s",
                    "Seq. write"  => "510MB/s"
                ]
            ],
            [
                "id" => 25,
                "name" => "P1 NVMe",
                "brand" => "Crucial",
                "price" => 107,
                "category_id" => 5,
                "specs" => [
                    "Capacity" => "1TB",
                    "Memory"  => "Micron 3D QLC",
                    "Interface"  => "M.2 PCIe 3.0 x4",
                    "Seq. read"  => "2,000MB/s",
                    "Seq. write"  => "1,700MB/s"
                ]
            ],
            [
                "id" => 26,
                "name" => "RM850x",
                "brand" => "Corsair",
                "price" => 144,
                "category_id" => 6,
                "specs" => [
                    "Type" => "ATX",
                    "Maximum Power" => "850W",
                    "Efficiency rating" => "80 Plus Gold",
                    "Modularity" => "Full"
                ]
            ],
            [
                "id" => 27,
                "name" => "MasterWatt 750",
                "brand" => "Cooler Master",
                "price" => 93,
                "category_id" => 6,
                "specs" => [
                    "Type" => "ATX",
                    "Maximum Power" => "750W",
                    "Efficiency rating" => "80 Plus Bronze",
                    "Modularity" => "Semi"
                ]
            ],
            [
                "id" => 28,
                "name" => "Dagger 500W",
                "brand" => "FSP",
                "price" => 129,
                "category_id" => 6,
                "specs" => [
                    "Type" => "SFX",
                    "Maximum Power" => "500W",
                    "Efficiency rating" => "80 Plus Gold",
                    "Modularity" => "Full"
                ]
            ],
            [
                "id" => 29,
                "name" => "Astrape P1-750G",
                "brand" => "Gamdias",
                "price" => 107,
                "category_id" => 6,
                "specs" => [
                    "Type" => "ATX",
                    "Maximum Power" => "750W",
                    "Efficiency rating" => "80 Plus Gold",
                    "Modularity" => "Full"
                ]
            ],
            [
                "id" => 30,
                "name" => "E850",
                "brand" => "NZXT",
                "price" => 107,
                "category_id" => 6,
                "specs" => [
                    "Type" => "ATX",
                    "Maximum Power" => "850W",
                    "Efficiency rating" => "80 Plus Gold",
                    "Modularity" => "Full"
                ]
            ]
            
        ];

        foreach ($products as $key => $product) {
            Product::updateOrCreate($product);
        }
    }
}
