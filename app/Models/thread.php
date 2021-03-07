<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class thread extends Model
{
    use HasFactory;

    public function channel(): BelongsTo
    {
        return $this->belongsTo(Channel::class);
    }

    public function replie(): HasMany
    {
        return $this->hasMany(Replie::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
