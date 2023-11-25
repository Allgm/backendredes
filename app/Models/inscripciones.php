<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscripciones extends Model
{
    use HasFactory;

    protected $fillable = ['inscriptiontype', 'name', 'phone_number'];

    public function setTitleAttribute($value)
    {
        $this->attributes['name']  = strtoupper($value);
    }

    public function getDescriptionAttribute($value){
        return ucfirst($value);
    }

    //Esta es una herencia
    public function user(){
        return $this->belongsTo(User::class);
    }
}
