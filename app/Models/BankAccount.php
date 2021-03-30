<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    protected $table ='bank_accounts';

    protected $fillable = [
        'fundraisers_id',
        'bank_id', 
        'account_no',
    ];
}
