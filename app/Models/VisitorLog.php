<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorLog extends Model
{
    protected $fillable = [
        'user_id',
        'ip',
        'country',
        'region',
        'city',
        'url',
    ];
}
