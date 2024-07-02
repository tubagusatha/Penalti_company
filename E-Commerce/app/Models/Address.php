<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address_label',
        'recipient_name',
        'recipient_mobile_number',
        'address',
        'state',
        'city',
        'slug',
        'subdistrict',
        'postcode',
        'primary'
    ];
}
