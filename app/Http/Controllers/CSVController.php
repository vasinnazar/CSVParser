<?php

namespace App\Http\Controllers;

use App\Action\CSV\StoreAction;
use App\Http\Requests\CSV\StoreCSVRequest;
use App\Repositories\ProductRepository;

class CSVController
{
    // render loader file page
     public function index()
     {
         return view('csv_loader');
     }

     // parse and save data to database
     public function parse(StoreAction $storeAction, StoreCSVRequest $storeCSVRequest, ProductRepository $productRepository)
     {
         $storeAction->action($storeCSVRequest->file, $productRepository);
         return redirect('products');
     }
}
