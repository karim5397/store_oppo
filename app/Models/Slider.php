<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable=[
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'image',
    ];
}
