<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'venue_name',
        'check_in_time',
        'check_out_time',
        'longitude',
        'latitude',
        'check_in_image',
        'check_out_image',
        'check_in_uploaded_at',
        'check_out_uploaded_at',
    ];

    protected $dates = [
        'check_in_uploaded_at',
        'check_out_uploaded_at',
    ];
}
