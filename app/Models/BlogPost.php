<?php

namespace App\Models;

use App\Enums\BlogPostStatus;
use App\Models\Concerns\HasAuditUsers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use HasAuditUsers, SoftDeletes;

    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }

    public function pageViews(): HasMany
    {
        return $this->hasMany(PageView::class);
    }

    protected function casts(): array
    {
        return [
            'status' => BlogPostStatus::class,
            'published_at' => 'datetime',
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('status', BlogPostStatus::Published);
    }
}
