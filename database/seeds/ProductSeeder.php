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
                "brand" => "Intel",
                "category_id" => 1,
                "id" => 1,
                "name" => "Intel Core i7 10700K",
                "price" => 377,
                "specs" => [
                    "Base Clock" => "3.8GHz",
                    "Cores" => "8",
                    "Threads" => "16",
                    "Turbo Clock" => "5.1GHz"
                ]
            ],
            [
                "brand" => "Intel",
                "category_id" => 1,
                "id" => 2,
                "name" => "Intel Core i9 10900K",
                "price" => 746,
                "specs" => [
                    "Base Clock" => "3.7GHz",
                    "Cores" => "10",
                    "Threads" => "20",
                    "Turbo Clock" => "5.3GHz"
                ]
            ],
            [
                "brand" => "AMD",
                "category_id" => 1,
                "id" => 3,
                "name" => "AMD Ryzen 9 3900X",
                "price" => 729,
                "specs" => [
                    "Base Clock" => "3.8GHz",
                    "Cores" => "12",
                    "Threads" => "24",
                    "Turbo Clock" => "5.3GHz"
                ]
            ],
            [
                "brand" => "AMD",
                "category_id" => 1,
                "id" => 4,
                "name" => "AMD Ryzen 7 3700X",
                "price" => 305,
                "specs" => [
                    "Base Clock" => "3.6GHz",
                    "Cores" => "8",
                    "Threads" => "16",
                    "Turbo Clock" => "4.4GHz",
                ]
            ],
            [
                "brand" => "Intel",
                "category_id" => 1,
                "id" => 5,
                "name" => "Intel Core i5 9400F",
                "price" => 139,
                "specs" => [
                    "Base Clock" => "2.9GHz",
                    "Cores" => "6",
                    "Threads" => "6",
                    "Turbo Clock" => "4.1GHz",
                ]
            ],
            [
                "brand" => "Nvidia",
                "category_id" => 2,
                "id" => 6,
                "name" => "Nvidia GeForce RTX 3080",
                "price" => 339,
                "specs" => [
                    "Base clock" => "1,440MHz",
                    "Boost clock" => "1,710MHz",
                    "Memory clock" => "19 GT/s",
                    "Memory" => "10GB GDDR6X",
                ]
            ],
            [
                "brand" => "Nvidia",
                "category_id" => 2,
                "id" => 7,
                "name" => "Nvidia GeForce RTX 2070 Super",
                "price" => 859,
                "specs" => [
                    "Base clock" => "1,605MHz",
                    "Boost clock" => "1,770MHz",
                    "Memory clock" => "14 GT/s",
                    "Memory" => "8GB GDDR6",
                ]
            ],
            [
                "brand" => "AMD",
                "category_id" => 2,
                "id" => 8,
                "name" => "AMD Radeon RX 5700",
                "price" => 399,
                "specs" => [
                    "Base clock" => "1,465MHz",
                    "Boost clock" => "1,725MHz",
                    "Memory clock" => "14 GT/s",
                    "Memory" => "8GB GDDR6",
                ]
            ],
            [
                "brand" => "AMD",
                "category_id" => 2,
                "id" => 9,
                "name" => "AMD Radeon RX 5600 XT",
                "price" => 279,
                "specs" => [
                    "Base clock" => "1,375MHz",
                    "Boost clock" => "1,750MHz",
                    "Memory clock" => "12 - 14GT/s",
                    "Memory" => "6GB GDDR6",
                ]
            ],
            [
                "brand" => "Nvidia",
                "category_id" => 2,
                "id" => 10,
                "name" => "Nvidia GeForce GTX 1660 Super",
                "price" => 285,
                "specs" => [
                    "Base clock" => "1,530MHz",
                    "Boost clock" => "1,785MHz",
                    "Memory clock" => "14GT/s",
                    "Memory" => "6GB GDDR6",
                ]
            ],
            [
                "brand" => "Asus",
                "category_id" => 3,
                "id" => 11,
                "name" => "ROG Maximus XII Extreme",
                "price" => 849,
                "specs" => [
                    "CPU support" => "Intel 10th Gen",
                    "Expansion slots" => "2x PCIe 3.0 x16",
                    "Memory support" => "4x DIMM, up to 128GB, DDR4-4700",
                    "Network" => "1x 10Gb Marvell ethernet, 1x Intel ethernet, Intel Wi-Fi 6 wireless",
                    "Rear USB" => "10x USB 3.2, 2x USB 2.0",
                    "Size" => "Extended ATX",
                    "Socket" => "LGA 1200",
                    "Storage" => "2x M.2, 2x M.2 (DIMM.2 board)",
                    "Video ports" => "2x Thunderbolt 3 ports on extension card (DP1.4)",
                ]
            ],
            [
                "brand" => "MSI",
                "category_id" => 3,
                "id" => 12,
                "name" => "MPG Z490 Gaming Carbon WiFi",
                "price" => 263,
                "specs" => [
                    "CPU support" => "Intel 10th Gen",
                    "Expansion slots" => "3x PCIe 3.0 (x16/x0/x4 or x8/x8/x4), 2x PCIe 3.0 x1",
                    "Memory support" => "4x DIMM, up to 128GB, DDR4-4800 (OC)",
                    "Network" => "1x 2.5Gb LAN, Intel Wi-Fi 6 wireless",
                    "Rear USB" => "5x USB 3.2, 2x USB 2.0",
                    "Size" => "ATX",
                    "Socket" => "LGA 1200",
                    "Storage" => "2x M.2, 6x SATA 6Gbps",
                    "Video ports" => "1x DisplayPort, 1x HDMI",
                ]
            ],
            [
                "brand" => "MSI",
                "category_id" => 3,
                "id" => 13,
                "name" => "MAG B460M Mortar WiFi",
                "price" => 161,
                "specs" => [
                    "CPU support" => "Intel 10th Gen",
                    "Expansion slots" => "2x PCIe 3.0 x16, 1x PCIe 3.0 x1",
                    "Memory support" => "4x DIMM, up to DDR4-2933 (i7,i9) or DDR4-2666 (i5",
                    "Network" => "Realtek 2.5Gb LAN, Intel Wi-Fi 6 wireless",
                    "Rear USB" => "4x USB 3.2 Gen (1x Type-C), 2x USB 2.0",
                    "Size" => "Micro ATX",
                    "Socket" => "LGA 1200",
                    "Storage" => "2x M.2, 6x SATA 6Gbps",
                    "Video ports" => "1x DisplayPort, 1x HDMI",
                ]
            ],
            [
                "brand" => "ASRock",
                "category_id" => 3,
                "id" => 14,
                "name" => "B460 Steel Legend",
                "price" => 99,
                "specs" => [
                    "CPU support" => "Intel 10th Gen",
                    "Expansion slots" => "2x PCIe 3.0 x16, 1x PCIe 3.0 x1",
                    "Memory support" => "4x DIMM, up to DDR4-2933 (i7,i9) or DDR4-2666 (i5)",
                    "Network" => "Realtek 2.5Gb LAN",
                    "Rear USB" => "4x USB 3.2 Gen (1x Type-C), 2x USB 2.0",
                    "Size" => "ATX",
                    "Socket" => "LGA 1200",
                    "Storage" => "2x M.2, 6x SATA 6Gbps",
                    "Video ports" => "1x DisplayPort, 1x HDMI",
                ]
            ],
            [
                "brand" => "Gigabyte",
                "category_id" => 3,
                "id" => 15,
                "name" => "Z390 Aorus Ultra",
                "price" => 249,
                "specs" => [
                    "CPU support" => "Intel 8th and 9th Gen",
                    "Expansion slots" => "PCIe x16, PCIe x16 (x8), PCIe x16 (x4), 3x PCIe x1",
                    "Memory support" => "4x DIMM, up to 128GB, DDR4-4400 (OC)",
                    "Network" => "Ethernet, 1.73Gbps 802.11ac wireless",
                    "Rear USB" => "4x USB 3.2 Gen2 (1x Type-C), 2x USB 3.1 Gen1, 4x USB 2.0",
                    "Size" => "ATX",
                    "Socket" => "LGA 1151",
                    "Storage" => "3x M.2, 6x SATA",
                    "Video ports" => "HDMI",
                ]
            ],
            [
                "brand" => "TEAMGROUP",
                "category_id" => 4,
                "id" => 16,
                "name" => "XTREEM ARGB 16GB DDR4-3600MHz C14",
                "price" => 135,
                "specs" => [
                    "CAS Latency" => "14",
                    "Capacity" => "2x 8GB",
                    "Speed" => "DDR4-3600MHz",
                    "Timing" => "14-15-15-35",
                    "Voltage" => "1.45v"
                ]
            ],
            [
                "brand" => "Corsair",
                "category_id" => 4,
                "id" => 17,
                "name" => "Dominator Platinum RGB 32GB DDR4-3200MHz",
                "price" => 249,
                "specs" => [
                    "CAS Latency" => "16",
                    "Capacity" => "2x 16GB",
                    "Speed" => "DDR4-3200MHz",
                    "Timing" => "16-18-18-36",
                    "Voltage" => "1.35V"
                ]
            ],
            [
                "brand" => "G.Skill",
                "category_id" => 4,
                "id" => 18,
                "name" => "Trident Z Royal 16GB DDR4-4000MHz",
                "price" => 159,
                "specs" => [
                    "CAS Latency" => "18",
                    "Capacity" => "2x 16GB",
                    "Speed" => "DDR4-3600MHz",
                    "Timing" => "18-22-22-42",
                    "Voltage" => "1.35V"
                ]
            ],
            [
                "brand" => "Gigabyte",
                "category_id" => 4,
                "id" => 19,
                "name" => "Z390 Trident Z Royal 16GB DDR4-4000MHz",
                "price" => 244,
                "specs" => [
                    "CAS Latency" => "15",
                    "Capacity" => "2x 8GB",
                    "Speed" => "DDR4-4000MHz",
                    "Timing" => "15-16-16-36",
                    "Voltage" => "1.5V"
                ]
            ],
            [
                "brand" => "G.Skill",
                "category_id" => 4,
                "id" => 20,
                "name" => "Ripjaws V 16GB DDR4-2400MHz",
                "price" => 46,
                "specs" => [
                    "CAS Latency" => "15",
                    "Capacity" => "2x 8GB",
                    "Speed" => "DDR4-2400MHz",
                    "Timing" => "15-15-15-35",
                    "Voltage" => "1.2V"
                ]
            ],
            [
                "brand" => "Addlink",
                "category_id" => 5,
                "id" => 21,
                "name" => "S70",
                "price" => 136,
                "specs" => [
                    "Capacity" => "256GB, 512GB, 1TB, 2TB",
                    "Interface"  => "M.2 PCIe 3.0 x4",
                    "Memory"  => "Toshiba 3D TLC",
                    "Seq. read"  => "3,400MB/s (512GB version)",
                    "Seq. write"  => "2,000MB/s (512GB version)"
                ]
            ],
            [
                "brand" => "Western Digital",
                "category_id" => 5,
                "id" => 22,
                "name" => "Black SN750 1TB",
                "price" => 129,
                "specs" => [
                    "Capacity" => "1TB",
                    "Interface"  => "M.2 PCIe 3.0 x4",
                    "Memory"  => "SanDisk/Toshiba 3D TLC",
                    "Seq. read"  => "3,470MB/s",
                    "Seq. write"  => "3,000MB/s"
                ]
            ],
            [
                "brand" => "Samsung",
                "category_id" => 5,
                "id" => 23,
                "name" => "970 EVO Plus 500GB",
                "price" => 187,
                "specs" => [
                    "Capacity" => "500GB",
                    "Interface"  => "M.2 PCIe 3.0 x4",
                    "Memory"  => "Samsung 3-bit MLC",
                    "Seq. read"  => "3,500MB/s",
                    "Seq. write"  => "3,200MB/s"
                ]
            ],
            [
                "brand" => "Crucial",
                "category_id" => 5,
                "id" => 24,
                "name" => "MX500",
                "price" => 109,
                "specs" => [
                    "Capacity" => "1TB",
                    "Interface"  => "SATA 6Gb/s",
                    "Memory"  => "Micron TLC",
                    "Seq. read"  => "560MB/s",
                    "Seq. write"  => "510MB/s"
                ]
            ],
            [
                "brand" => "Crucial",
                "category_id" => 5,
                "id" => 25,
                "name" => "P1 NVMe",
                "price" => 107,
                "specs" => [
                    "Capacity" => "1TB",
                    "Interface"  => "M.2 PCIe 3.0 x4",
                    "Memory"  => "Micron 3D QLC",
                    "Seq. read"  => "2,000MB/s",
                    "Seq. write"  => "1,700MB/s"
                ]
            ],
            [
                "brand" => "Corsair",
                "category_id" => 6,
                "id" => 26,
                "name" => "RM850x",
                "price" => 144,
                "specs" => [
                    "Efficiency rating" => "80 Plus Gold",
                    "Maximum Power" => "850W",
                    "Modularity" => "Full",
                    "Type" => "ATX"
                ]
            ],
            [
                "brand" => "Cooler Master",
                "category_id" => 6,
                "id" => 27,
                "name" => "MasterWatt 750",
                "price" => 93,
                "specs" => [
                    "Efficiency rating" => "80 Plus Bronze",
                    "Maximum Power" => "750W",
                    "Modularity" => "Semi",
                    "Type" => "ATX"
                ]
            ],
            [
                "brand" => "FSP",
                "category_id" => 6,
                "id" => 28,
                "name" => "Dagger 500W",
                "price" => 129,
                "specs" => [
                    "Efficiency rating" => "80 Plus Gold",
                    "Maximum Power" => "500W",
                    "Modularity" => "Full",
                    "Type" => "SFX"
                ]
            ],
            [
                "id" => 29,
                "name" => "Astrape P1-750G",
                "brand" => "Gamdias",
                "price" => 107,
                "category_id" => 6,
                "specs" => [
                    "Efficiency rating" => "80 Plus Gold",
                    "Maximum Power" => "750W",
                    "Modularity" => "Full",
                    "Type" => "ATX"
                ]
            ],
            [
                "brand" => "NZXT",
                "category_id" => 6,
                "id" => 30,
                "name" => "E850",
                "price" => 107,
                "specs" => [
                    "Efficiency rating" => "80 Plus Gold",
                    "Maximum Power" => "850W",
                    "Modularity" => "Full",
                    "Type" => "ATX"
                ]
            ]
            
        ];

        foreach ($products as $key => $product) {
            Product::updateOrCreate([
                'id' => $product['id']
            ],$product);
        }
    }
}
