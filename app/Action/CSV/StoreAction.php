<?php

namespace App\Action\CSV;

use App\Helpers\CSVParser;
use App\Models\Product;
use App\Repositories\ProductRepository;

class StoreAction
{
    // get data from file and save to database
     public function action($file, ProductRepository $productRepository)
     {
         $parser = new CSVParser($file);
         $products = $parser->parseCSV();
         $productRepository->setProducts($products);
//         foreach ($products as $product) {
//             Product::create([
//                 'code' => $product[0],
//                 'naming' => $product[1],
//                 'level1' => $product[2],
//                 'level2' => $product[3],
//                 'level3' => $product[4],
//                 'price' => $product[5],
//                 'sp_price' => $product[6],
//                 'quantity' => $product[7],
//                 'property_fields' => $product[8],
//                 'joint_purchases' => $product[9],
//                 'measure_unit' => $product[10],
//                 'image' => $product[11],
//                 'main_page_display' => $product[12],
//                 'description' => $product[13]
//             ]);
//         }
     }
}
