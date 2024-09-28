<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name
    protected $table = 'cars';

    // Define the fillable fields
    protected $fillable = [
        'make',
        'model',
        'year',
        'price_per_day',
        'availability_status'
    ];
}