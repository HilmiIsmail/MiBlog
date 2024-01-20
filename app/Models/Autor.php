<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Autor extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'email', 'imagen', 'role'];

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }

    public function nombre(): Attribute
    {
        return Attribute::make(set: fn ($v) => ucfirst($v));
    }
}
