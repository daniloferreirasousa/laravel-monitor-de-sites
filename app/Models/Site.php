<?php

namespace App\Models;

use App\Models\User;
use App\Models\Endpoint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Site extends Model
{
    use HasFactory;

    protected $fillable = ['url'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function endpoints(): HasMany
    {
        return $this->hasMany(Endpoint::class);
    }
}
