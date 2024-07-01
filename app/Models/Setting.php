<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'preferences',
        'theme',
    ];

    // Accessor for preferences
    public function getPreferencesAttribute($value)
    {
        return json_decode($value, true);
    }

    // Mutator for preferences
    public function setPreferencesAttribute($value)
    {
        $this->attributes['preferences'] = json_encode($value);
    }

    /**
     * Get the user that owns the settings.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
