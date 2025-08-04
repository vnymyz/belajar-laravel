<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
     use HasFactory;
     protected $fillable = [
        'title',
        'author',
        'slug',
        'body'
    ];

    // membuat eager loading nya di model biar enggak perlu ubah2 di rute kita
    // kalau eager loading nya kita matiin nanti error atau terdeteksi ada yg make lazy loading
    // Attempted to lazy load [author] on model [App\Models\Post] but lazy loading is disabled.
    protected $with = ['author', 'category'];

    // 1 post dimiliki oleh 1 author atau user (one to one)
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // tambahin buat relasi kategori. 1 post dimiliki oleh 1 kategori
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
