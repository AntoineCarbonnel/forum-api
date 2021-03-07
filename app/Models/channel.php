<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/use Illuminate\Database\Eloquent\Relations\HasMany;

class channel extends Model
{
    use HasFactory;

    public function thread(): HasMany
    {
        return $this->hasMany(Thread::class);
    }
}
