<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    protected $guarded = false;
    public function images(): HasMany
    {
        return $this->hasMany(PageImages::class, 'page_id', 'id');
    }

    public function text(): HasMany
    {
        return $this->hasMany(PageText::class, 'page_id', 'id');
    }
}
