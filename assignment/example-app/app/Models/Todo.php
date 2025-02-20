<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Databe\Eluquent\Relations\BelongsTo;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'decription', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
