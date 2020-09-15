<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    //attributes id, name, price, created_at, updated_at
    protected $fillable = ['brand','category_id','name','price','specs'];

    protected $casts = [
        'specs' => 'array'
    ];

    public static function validate(Request $request){

        $request->validate([
            "brand" => "required",
            "name" => "required",
            "price" => "required|numeric|gt:0",
            "specs.*.name" => "required",
            "specs.*.value" => "required"
        ]);

    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getBrand()
    {
        return $this->attributes['brand'];
    }

    public function setBrand($brand)
    {
        $this->attributes['brand'] = $brand;
    }

    public function getPrice()
    {
        return $this->attributes['price'];
    }

    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
    
    public function getSpecs()
    {
        return json_decode($this->attributes['specs']);
    }

    public function setSpecs($specs)
    {
        $specs = [];

        foreach ($specs as $spec) {
            if (!is_null($spec)) {
                $specs['name'] = $spec['name'];
                $specs['value'] = $spec['value'];
            }
        }
    
        $this->attributes['specs'] = json_encode($specs);
    }

    public function getCategoryId()
    {
        return $this->attributes['category_id'];
    }

    public function setCategoryId($category_id)
    {
        $this->attributes['category_id'] = $category_id;
    }

    public function wishsLists()
    {
        return $this->belongsToMany(WishList::class);
    }
}

