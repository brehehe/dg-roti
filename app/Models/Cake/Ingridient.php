<?php

namespace App\Models\Cake;

use Illuminate\Database\Eloquent\Model;

class Ingridient extends Model
{
    //
    protected $fillable = ['name', 'cake_id'];

    public function cake()
    {
        return $this->belongsTo(Cake::class, 'cake_id', 'id');
    }
}
