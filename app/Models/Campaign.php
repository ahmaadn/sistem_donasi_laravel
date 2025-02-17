<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Campaign extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "title",
        "description",
        "image",
        "deadline",
        "goal",
        "collected",
        "status",
        "created_by"
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
