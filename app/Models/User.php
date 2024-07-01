<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Create a test user with a random password.
     *
     * @return \App\Models\User
     */
    public static function createTestUser()
    {
        $randomPassword = Str::random(12); // Generate a random 12-character password

        $user = self::create([
            'name' => 'user' . (self::max('id') + 1),
            'email' => 'user' . (self::max('id') + 1) . '@test.test',
            'password' => Hash::make($randomPassword), // Use the random password
        ]);

        // Assign default role
        $user->role()->associate(Role::where('name', 'user')->first());
        $user->save();

        return $user;
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Chirps from the Laravel tutorial
    public function chirps(): HasMany
    {
        return $this->hasMany(Chirp::class);
    }

    /**
     * Get the role associated with the user.
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
    
    public function hasPermission($permission)
    {
        return $this->role->permissions->contains('name', $permission);
    }

    /**
     * Get the settings associated with the user.
     */
    public function settings(): HasOne
    {
        return $this->hasOne(Setting::class);
    }
}
