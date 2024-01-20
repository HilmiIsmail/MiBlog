<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'contenido', 'imagen', 'autor_id'];

    public function autor(): BelongsTo
    {
        return $this->belongsTo(Autor::class);
    }

    /* ----------------------------------- -- ----------------------------------- */
    public function titulo(): Attribute
    {
        return Attribute::make(set: fn ($v) => ucfirst($v));
    }

    public function contenido(): Attribute
    {
        return Attribute::make(set: fn ($v) => ucfirst($v));
    }
}
