<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodDonation extends Model
{
    use HasFactory;

    protected $table ='blood_donation';

    protected $fillable = [
        'title',
        'detail',
        'hospital_name',
        'required_blood_group',
        'verified',
        'mobile_no',
        'whatsapp_no',
        'status',
    ];
}
