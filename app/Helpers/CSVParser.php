<?php

namespace App\Helpers;

class CSVParser
{
     private $csv;

     public function __construct($csv)
     {
         $this->csv = $csv;
     }
     // parse file's content
     public function parseCSV(): array
     {
         $fileContent = file_get_contents($this->csv);
         $parsedContent = explode(';', $fileContent);
         return $this->structureContentToArray($parsedContent);
//         $product = [];
//         $products = [];
//         foreach ( $parsedContent as $item ) {
//             if(str_contains($item, ',,')) {
//             $itemArray = explode(',,', $item);
//             $lastIndex = count($itemArray);
//                 array_push($product, $itemArray[0]);
//                 array_push($products, $product);
//                 $product = [];
//                 array_push($product, str_replace(',', '', $itemArray[--$lastIndex]));
//                 continue;
//             }
//             array_push($product, $item);
//         }
//          array_shift($products);
//          return $products;
     }
    // structure data to nested array
     private function structureContentToArray($parsedContent)
     {
         $product = [];
         $products = [];
         foreach ( $parsedContent as $item ) {
             if(str_contains($item, ',,')) {
                 $itemArray = explode(',,', $item);
                 $lastIndex = count($itemArray);
                 array_push($product, $itemArray[0]);
                 array_push($products, $product);
                 $product = [];
                 array_push($product, str_replace(',', '', $itemArray[--$lastIndex]));
                 continue;
             }
             array_push($product, $item);
         }
         return array_shift($products);
     }
}
