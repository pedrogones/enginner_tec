<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;
    use LogsActivity;

    protected $fillable = [
        'user_id',
        'address_id',
        'birthdate',
        'phone',
        'gender',
        'type_contact'
    ];

    protected static $logFillable = true;
    protected $presenter = DefaultPresenter::class;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
//
//    public function companies()
//    {
//        return $this->hasMany(ClientCompany::class);
//    }
//
//    public function getCompaniesId()
//    {
//        return $this->companies->pluck('id');
//    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
}
