<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use GoldSpecDigital\LaravelEloquentUUID\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
// use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class User extends Authenticatable
{
    use Uuids;
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'email',
        'qr_code',
        'password',
        'avatar',
        // 'nik',
        // 'address',
        // 'provinsi',
        // 'kabupaten',
        // 'kecamatan',
        // 'postal_code',
        'phone',
        'role',
        'date',
        'date_string',
        // 'rekening',
        // 'rekening_type',
        'gender',
        
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'user_id', 'id');
    }

    public function companies()
    {
        return $this->hasOne(Companies::class);
    }

    public function transaksi() {
        return $this->hasMany(Transaksi::class);
    }

    public function stock() {
        return $this->hasMany(Stock::class);
    }
}
