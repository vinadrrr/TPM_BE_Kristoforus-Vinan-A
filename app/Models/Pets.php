<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    Use HasFactory;
    protected $fillable = [
        "PetsName",
        "PetsAge",
        "PetsImage",
        "CategoryId"
    ];

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class, 'CategoryId');
    }

}
