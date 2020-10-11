<?php

/*
 * @author    Santiago Gil Zapata sgilz@eafit.edu.co
 */

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Models\Order;

class CreditCard extends Model
{
    //attributes id, user_id, balance, card_number, cvv, expiration_date, owner, owner_id
    protected $fillable = ['balance','card_number', 'cvv', 'expiration_date', 'owner', 'owner_id',];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function setUserId($user_id)
    {
        $this->attributes['user_id'] = $user_id;
    }

    public function getUserId()
    {
        $this->attributes['user_id'];
    }

    public function getBalance()
    {
        return $this->attributes['balance'];
    }

    public function setBalance($balance)
    {
        $this->attributes['balance'] = $balance;
    }

    public function getCardNumber()
    {
        return $this->attributes['card_number'];
    }

    public function setCardNumber($card_number)
    {
        $this->attributes['card_number'] = $card_number;
    }

    public function getCvv()
    {
        return $this->attributes['cvv'];
    }

    public function setCvv($cvv)
    {
        $this->attributes['cvv'] = $cvv;
    }

    public function getExpirationDate()
    {
        return $this->attributes['expiration_date'];
    }

    public function setExpirationDate($expiration_date)
    {
        $this->attributes['expiration_date'] = $expiration_date;
    }

    public function getOwner()
    {
        return $this->attributes['owner'];
    }

    public function setOwner($owner)
    {
        $this->attributes['owner'] = $owner;
    }

    public function getOwnerId()
    {
        return $this->attributes['owner_id'];
    }

    public function setOwnerId($owner_id)
    {
        $this->attributes['owner_id'] = $owner_id;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public static function validate(Request $request)
    {
        $request->validate([
            "card_number" => "required|integer|between:1000000000000000,9999999999999999",
            "cvv" => "required|integer|min:100|max:999",
            "expiration_month" => "required",
            "expiration_year" => "required",
            "owner" => "required|regex:/(^([A-Z][a-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ]+(?:\s+[A-Z][a-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ]+)+)$)/u",
            "owner_id" => "required|integer|between:1000000,999999999999",
        ]);
    }

}

