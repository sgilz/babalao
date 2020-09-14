<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category extends Model
{

    protected $fillable = ['name', 'specs'];

    protected $casts = [
        'specs' => 'array'
    ];

    public static function validate(Request $request){
        $request->validate([
            "name" => "required",
            "image" => "required|image|mimes:png"
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

    public function getSpecs()
    {
        return json_decode($this->attributes['specs']);
    }

    public function setSpecs($specs)
    {
        $specs = [];

        foreach ($specs as $spec) {
            if (!is_null($spec)) {
                $specs[] = $spec;
            }
        }
    
        $this->attributes['specs'] = json_encode($specs);
    }
}
