<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class Portfolio extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasSlug ;

    protected $fillable = [
        'name',
        'slug',
        'meta_keywords',
        'description',
        'status',
        'excerpt',
        'meta_description',
        'category_id',
    ];

    protected $appends = [
        'photo',
        'photos',
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $thumbnailWidth  = 500;
        $thumbnailHeight = 500;

        $thumbnailPreviewWidth  = 1500;
        $thumbnailPreviewHeight = 800;

        $this->addMediaConversion('thumbnail')
            ->width($thumbnailWidth)
            ->height($thumbnailHeight);
        $this->addMediaConversion('preview_thumbnail')
            ->width($thumbnailPreviewWidth)
            ->height($thumbnailPreviewHeight);
    }

    public function getPhotoAttribute()
    {
        return $this->getMedia('portfolio_photo')->map(function ($item) {
            $media                      = $item->toArray();
            $media['url']               = $item->getUrl();
            $media['thumbnail']         = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
    }

    public function getPhotosAttribute()
    {
        return $this->getMedia('portfolio_photos')->map(function ($item) {
            $media                      = $item->toArray();
            $media['url']               = $item->getUrl();
            $media['thumbnail']         = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
    }
    
}
