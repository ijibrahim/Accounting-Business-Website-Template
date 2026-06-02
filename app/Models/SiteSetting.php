<?php

namespace App\Models;

use App\Models\Concerns\HasAuditUsers;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasAuditUsers;

    protected $guarded = [];
}
