<?php
/*
 * @author    Santiago Gil Zapata sgilz@eafit.edu.co
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\App;

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
                    'id' => uniqid("babalao_prod_req_"),
                    'length' => $this->collection->count(),
                    'link' => App::make("url")->to('/home'),
                ],
                'data' => $this->collection,
        ];
    }
}
