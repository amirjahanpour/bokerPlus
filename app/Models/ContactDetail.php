<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    protected $table = 'contactDetails';
    protected $fillable = [
        'name',
        'family',
        'phone',
        'telegramID',
        'brokerName',
        'cabinNumber',
        'message',
        'isSeen'
    ];
}
