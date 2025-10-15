<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class Service extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory, HasSlug, InteractsWithMedia;

    protected $guarded = [];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function booted(): void
    {
        static::addGlobalScope('ServiceScope', function (Builder $builder) {
            $builder->orderBy('sort', 'asc')->where('active', true);
        });

        static::created(function ($service) {
            self::updateSitemap();
        });

        static::updated(function ($service) {
            self::updateSitemap();
        });

        static::deleted(function ($service) {
            self::updateSitemap();
        });
    }

    /**
     * Regenerate sitemap
     */
    protected static function updateSitemap(): void
    {
        $sitemap = Sitemap::create();

        $sitemap->add(Url::create(route('welcome'))->setPriority(1.0));
        $sitemap->add(Url::create(route('about')));
        $sitemap->add(Url::create(route('contact')));
        $sitemap->add(Url::create(route('services')));
        $sitemap->add(Url::create(route('our-work')));
        $sitemap->add(Url::create(route('privacy-policy')));
        $sitemap->add(Url::create(route('terms-and-conditions')));


        foreach (self::all() as $service) {
            $url = Url::create(route('service.show', $service))
                ->setLastModificationDate($service->updated_at);

            $imageUrl = $service->getFirstMediaUrl();
            if ($imageUrl) {
                $url->addImage($imageUrl, $service->name, $service->name);
            }

            $sitemap->add($url);
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
