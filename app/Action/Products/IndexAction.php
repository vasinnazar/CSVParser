<?php

namespace App\Action\Products;

use App\Repositories\ProductRepository;

class IndexAction
{
    // get products via repository
    public function action(ProductRepository $productRepository)
    {
        return $productRepository->getProducts();
    }
}
