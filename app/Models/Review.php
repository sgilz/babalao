<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Review extends Model
{
    /*
     int id, String description, int productId, double rating, int userId, Date created_at, Date upated_at
     */
    protected $fillable = ['description','headline','product_id','rating','user_id'];

    public static function validate(Request $request)
    {
        $request->validate([
            'description' => ['max:400','required','string'],
            'headline' => ['max:100','required','string'],
            'rating' => ['integer'],
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

    public function getDescription()
    {
        return $this->attributes['description'];
    }

    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }

    public function getHeadline()
    {
        return $this->attributes['headline'];
    }

    public function setHeadline($headline)
    {
        $this->attributes['headline'] = $headline;
    }

    public function getRating()
    {
        return $this->attributes['rating'];
    }

    public function setRating($rating)
    {
        $this->attributes['rating'] = $rating;
    }

    public function getProductId()
    {
        return $this->attributes['product_id'];
    }

    public function setProductId($product_id)
    {
        $this->attributes['product_id'] = $product_id;
    }

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }

    public function setUserId($user_id)
    {
        $this->attributes['user_id'] = $user_id;
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}