<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
    * Transform the resource collection into an array.
    *
    * @param \Illuminate\Http\Request $request
    * @return array
    */
    public function toArray($request)
    {
        return [
                'collection-data' => [
                    'id' => 'SKU678743',
                    'link' => 'http://localhost/laravelcourse/public/product/create',
                ],
                'data' => $this->collection,
        ];
    }
}
