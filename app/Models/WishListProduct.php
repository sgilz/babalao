<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class WishListProduct extends Model
{
    /*
     int id, int product_id, int user_id, Date created_at, Date upated_at
     */
    protected $fillable = ['product_id','wish_list_id'];

    public static function validate(Request $request)
    {
        $request->validate([
            'product_id' => 'required|int',
            'wish_list_id' => 'required|int',
        ]
        );
    }
    
    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getProductId()
    {
        return $this->attributes['product_id'];
    }

    public function setProductId($product_id)
    {
        $this->attributes['product_id'] = $product_id;
    }

    public function getWishListId()
    {
        return $this->attributes['wish_list_id'];
    }

    public function setWishListId($wish_list_id)
    {
        $this->attributes['wish_list_id'] = $wish_list_id;
    }
}