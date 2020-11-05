<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "brand" => $this->getBrand(),
            "image-src" => App::make("url")->to("/storage/products/{$this->getId()}.png"),
            "link" => App::make("url")->to("/product/{$this->getId()}"),
            "name" => $this->getName(),
            "price" => $this->getPrice(),
        ];
    }
}
