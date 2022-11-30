<?php

namespace App\Models;

use App\Traits\Uuids;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory,Uuids,Sluggable;

    protected $fillable = [
        'language_id',
        'category_id',
        'title',
        'slug',
        'image',
        'description',
        'tag',
        'status'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function sluggableEvent(): string
    {
        /**
         * Default behaviour -- generate slug before model is saved.
         */
        return SluggableObserver::SAVING;

        /**
         * Optional behaviour -- generate slug after model is saved.
         * This will likely become the new default in the next major release.
         */
        return SluggableObserver::SAVED;
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function bCategory()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }
}
