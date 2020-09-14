<?php

namespace App\Models;

use http\Env\Request;
use App\Util\State;
use App\Models\Item;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['date','state','total'];

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

    public function getState(){
        return $this->attributes['state'];
    }

    public function setState($state){
        $this->attributes['state'] = $state;
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    /*public function user()
    {
        return $this->belongsTo(User::class);
    }*/

    public static function validate($request)
    {
        $request->validate([
            "date" => "required|date",
            "state" => "required",
            "total" => "required|numeric|gt:0"
        ]);
    }
}
