<?php

namespace App\Models;

use http\Env\Request;
use App\Util\Status;
use App\Models\Item;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //attributes id, date, status, total, user, created_at, updated_at
    protected $fillable = ['date','status','user_id','total'];

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

    public function getStatus(){
        return $this->attributes['status'];
    }

    public function setStatus($status){
        $this->attributes['status'] = $status;
    }

    public function items()
    {
        return $this->hasMany(Item::class);
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
