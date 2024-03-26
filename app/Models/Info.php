<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Info extends Model
{
    use HasFactory;

    public $guarded = [];

    public function education(): BelongsTo
    {
        return $this->belongsTo(Education::class);
    }
}
