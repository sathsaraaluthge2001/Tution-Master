<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
        'contact',
        'address',
    ];

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

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function papers()
    {
        return $this->hasMany(Paper::class);
    }

    public function tutes()
    {
        return $this->hasMany(Tute::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function hasRole($role)
{
    // Assuming you have a `role` column in your users table
    return $this->role === $role;
}

}
