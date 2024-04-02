<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceQualityDimension extends Model
{
    use HasFactory;

    protected $attributes =[
        'client_id' => null,
        'cc_survey_id' => null,
        'sqd0' => null,
        'sqd1' => null,
        'sqd2' => null,
        'sqd3' => null,
        'sqd4' => null,
        'sqd5' => null,
        'sqd6' => null,
        'sqd7' => null,
        'sqd8' => null,
        
    ];

    protected $fillable = [
        'client_id',
        'cc_survey_id',
        'sqd0',
        'sqd1',
        'sqd2',
        'sqd3',
        'sqd4',
        'sqd5',
        'sqd6',
        'sqd7',
        'sqd8',
    ];
}