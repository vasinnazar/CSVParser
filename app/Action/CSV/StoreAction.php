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
     }
}
