<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Vacancies extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'company_id',
        'location',
        'job_category',
        'job_status',
        'experiences',
        'salary_grid',
        'views',
        'date_created'
    ];

    // Automatically generate slug when setting the title
    public static function boot()
    {
        parent::boot();

        static::creating(function ($job) {
            $job->slug = Str::slug($job->title);
        });

        static::updating(function ($job) {
            $job->slug = Str::slug($job->title);
        });
    }

    // Relationship: Job belongs to a Company
    public function companies()
    {
        return $this->belongsTo(Companies::class);
    }
}
