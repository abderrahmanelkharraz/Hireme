<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'description',
    //     'category',
    //     'cout',
    // ];
    protected $fillable = ['id', 'title', 'description', 'category', 'cout'];

}
