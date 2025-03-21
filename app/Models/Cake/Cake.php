<?php

namespace App\Models\Cake;

use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    //
    protected $fillable = ['name', 'image', 'description', 'price'];

    public function ingredients()
    {
        return $this->hasMany(Ingridient::class, 'cake_id', 'id');
    }
}
