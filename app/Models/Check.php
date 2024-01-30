<?php

namespace App\Models;

use App\Models\Endpoint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Check extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['status_code', 'response_body'];

    public function endpoint(): BelongsTo
    {
        return $this->belongsTo(Endpoint::class);
    }


    public function isSuccess(): bool
    {
        return $this->status_code >= 200 && $this->status_code < 300;
    }
}
