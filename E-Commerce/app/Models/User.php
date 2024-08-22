<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'number',
        'roles',
        'password',
        'url_image'
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

    public function getAvatarAttribute($value)
{
    // Mengembalikan URL gambar profil jika tersedia, jika tidak, kembalikan URL gambar default
    return $value ? asset('storage/profile/' . $value) : asset('path/to/default/avatar.jpg');
}


    public function isAdmin()
    {
        return $this->roles === 'ADMIN'; // Sesuaikan dengan nama kolom dan nilai peran yang kamu gunakan
    }

    public function gallery(): HasOne
{
    return $this->hasOne(userGallery::class, 'user_id', 'id');
}
    public function address(): HasMany
{
    return $this->hasMany(Address::class, 'user_id', 'id');
}

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
