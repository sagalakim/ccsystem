<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class CcSurvey extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'date',
        'cc1',
        'cc2',
        'cc3'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}
