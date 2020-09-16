<?php

/*
 * @author    Manuel Alejandro Gutierrez Mejia magutierrm@eafit.edu.co
 */

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;

class User extends Authenticatable
{
    use Notifiable;

    /* int id, String name, String email, String password, String address, String neighborhood,
    String city, boolean is_admin, Date created_at, Date upated_at
    */
    protected $fillable = ['address','city','email','name', 'neighborhood','password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['email_verified_at' => 'datetime',];

    public static function validate(Request $request)
    {
        $request->validate([
            'address' => 'max:50|required|string',
            'city' => 'max:50|required|string',
            'email' => 'max:255|required|string|unique:users',
            'name' => 'max:50|required|string',
            'neighborhood' => 'max:50|required|string',
            'password' => 'min:8|required|same:passwordConfirm',
            'passwordConfirm' => 'required|min:8',
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

    public function getEmail()
    {
        return $this->attributes['email'];
    }

    public function setEmail($email)
    {
        $this->attributes['email'] = $email;
    }

    public function getPassword(){
        return $this->attributes['password'];
    }

    public function setPassword($password)
    {
        $this->attributes['password'] = $password;
    }

    public function getAddress()
    {
        return $this->attributes['address'];
    }

    public function setAddress($address)
    {
        $this->attributes['address'] = $address;
    }

    public function getNeighborhood()
    {
        return $this->attributes['neighborhood'];
    }

    public function setNeighborhood($neighborhood)
    {
        $this->attributes['neighborhood'] =  $neighborhood;
    }

    public function getCity()
    {
        return $this->attributes['city'];
    }

    public function setCity($city)
    {
        $this->attributes['city'] =  $city;
    }

    public function getIsAdmin()
    {
        return $this->attributes['is_admin'];
    }

    public function setIsAdmin($isAdmin)
    {
        $this->attributs['is_admin'] =  $isAdmin;
    }

    public function creditCards()
    {
        return $this->hasMany(CreditCard::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function wishLists()
    {
        return $this->hasMany(WishList::class);
    }
}
