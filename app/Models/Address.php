<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;
    use LogsActivity;

    protected $fillable = [
        'street',
        'number',
        'cep',
        'district',
        'complement',
        'city',
        'uf',
        'latitude',
        'longitude'
    ];
//    protected $presenter = AddressPresenter::class;

//    protected static $logFillable = true;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
}
