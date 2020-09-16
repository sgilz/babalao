<?php

/*
 * @author    Manuel Alejandro Gutierrez Mejia magutierrm@eafit.edu.co
 */

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class WishList extends Model
{
    /*
     int id, int product_id, int user_id, Date created_at, Date upated_at
     */
    protected $fillable = ['user_id'];

    public static function validate(Request $request)
    {
        $request->validate([
            'user_id' => 'required|int',
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

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }

    public function setUserId($user_id)
    {
        $this->attributes['user_id'] = $user_id;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
