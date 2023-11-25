<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sneackers extends Model
{
    use HasFactory;

    protected $table = 'sneackers';
    protected $fillable = ['name', 'size', 'price'];

    public function setTitleAttribute($value)
    {
        $this->attributes['name']  = strtoupper($value);
    }

    public function getDescriptionAttribute($value){
        return ucfirst($value);
    }
}
