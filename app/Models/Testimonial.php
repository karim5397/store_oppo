<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable=[
        'title_en',
        'title_ar',
        'content_en',
        'content_ar',
        'description_en',
        'description_ar',
        'image',
    ];
}
