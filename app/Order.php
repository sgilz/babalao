<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['date','total'];

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

    public static function validate($request){
        $request->validate([
            "date" => "required",
            "total" => "required|numeric|gt:0"
        ]);
    }
}
