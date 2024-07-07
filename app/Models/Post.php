<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'imageUrl',
        'category_id',
        'user_id',
        'is_published',
        'published_at',
        'views',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }

    public function publishedDateFormatted()
    {
        return Carbon::parse($this->published_at)->format('d M Y');
    }

    public function humanReadablePublishedDate()
    {
        return Carbon::parse($this->published_at)->diffForHumans();
    }

    public function getShortTitle()
    {
        return Str::words($this->title, 10);
    }
    public function getAbstract()
    {
        return Str::words($this->content, 35);
    }
}
