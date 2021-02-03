<?php

namespace App\Models;

use http\Env\Request;
use App\Util\Status;
use App\Models\Item;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //attributes id, date, status, total, user, created_at, updated_at
    protected $fillable = ['credit_card_id', 'date', 'status', 'total', 'user_id'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getDate()
    {
        return $this->attributes['date'];
    }

    public function setDate($date)
    {
        $this->attributes['date'] = $date;
    }

    public function getTotal()
    {
        return $this->attributes['total'];
    }

    public function setTotal($total)
    {
        $this->attributes['total'] = $total;
    }

    public function getStatus()
    {
        return $this->attributes['status'];
    }

    public function setStatus($status)
    {
        $this->attributes['status'] = $status;
    }

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }

    public function setUserId($user_id)
    {
        $this->attributes['user_id'] = $user_id;
    }

    public function getCreditCardId()
    {
        return $this->attributes['credit_card_id'];
    }

    public function setCreditCardId($credit_card_id)
    {
        $this->attributes['credit_card_id'] = $credit_card_id;
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function creditCard()
    {
        return $this->belongsTo(CreditCard::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function validate($request)
    {
        $request->validate([
            "date" => "required|date",
            "status" => "required",
            "total" => "required|numeric|gt:0"
        ]);
    }
}
