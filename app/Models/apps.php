<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apps extends Model
{
    use HasFactory;

    protected $table = 'apps';
    protected $fillable = ['name1', 'name2', 'name3', 'name4', 'name5'];

}