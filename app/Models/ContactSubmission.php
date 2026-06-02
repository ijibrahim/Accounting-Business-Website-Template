<?php

namespace App\Models;

use App\Enums\ContactSubmissionStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactSubmission extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function deleter(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    protected function casts(): array
    {
        return [
            'status' => ContactSubmissionStatus::class,
        ];
    }
}
