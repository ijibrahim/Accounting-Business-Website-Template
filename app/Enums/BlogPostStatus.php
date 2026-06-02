<?php

namespace App\Enums;

enum BlogPostStatus: int
{
    case Draft = 0;
    case Published = 1;

    /*
    |--------------------------------------------------------------------------
    | LABEL
    |--------------------------------------------------------------------------
    */

    public function label(): string
    {
        return match ($this) {

            self::Draft => 'Draft',

            self::Published => 'Published',
        };
    }

    /*
    |--------------------------------------------------------------------------
    | BADGE COLOR
    |--------------------------------------------------------------------------
    */

    public function badge(): string
    {
        return match ($this) {

            self::Draft => 'warning',

            self::Published => 'success',
        };
    }

    /*
    |--------------------------------------------------------------------------
    | BADGE HTML
    |--------------------------------------------------------------------------
    */

    public function badgeHtml(): string
    {
        return sprintf(
            '<span class="badge bg-%s">%s</span>',
            $this->badge(),
            $this->label()
        );
    }

    /*
    |--------------------------------------------------------------------------
    | SELECT OPTIONS
    |--------------------------------------------------------------------------
    */

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn ($status) => [
                $status->value => $status->label(),
            ])
            ->toArray();
    }

    /*
    |--------------------------------------------------------------------------
    | VALUES
    |--------------------------------------------------------------------------
    */

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    /*
    |--------------------------------------------------------------------------
    | IS PUBLISHED
    |--------------------------------------------------------------------------
    */

    public function isPublished(): bool
    {
        return $this === self::Published;
    }

    /*
    |--------------------------------------------------------------------------
    | IS DRAFT
    |--------------------------------------------------------------------------
    */

    public function isDraft(): bool
    {
        return $this === self::Draft;
    }
}
