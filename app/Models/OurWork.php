<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\InteractsWithMedia;

class OurWork extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\OurWorkFactory> */
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];

    protected static function booted(): void
    {
        static::addGlobalScope('workScope', function (Builder $builder) {
            $builder->orderBy('sort', 'asc')->where('active', true);
        });
    }


}
