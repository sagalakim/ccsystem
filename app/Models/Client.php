<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CcSurvey;
use App\Models\ServiceQualityDimension;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_type',
        'sex',
        'age',
        'region_of_residence',
        'service_availed',
        'status'
    ];

    public function ccs()
    {
        return $this->belongsTo(CcSurvey::class, 'id', 'client_id');
    }

    public function sqd()
    {
        return $this->belongsTo(ServiceQualityDimension::class, 'id', 'client_id');
    }
}
