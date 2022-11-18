<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =  [
        'title',
        'category_id',
        'author',
        'release_date',
        'publish_date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
        
    }

    public function getReleaseDateAttribute($value)
    {
        return date_format(date_create($value), "d/M/y");
    }

    public function getPublishDateAttribute($value)
    {
        return date_format(date_create($value), "d/M/y");
    }
}
