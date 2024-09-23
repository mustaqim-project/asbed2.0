<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $guard_name = 'web';

    protected $table='users';
    protected $fillable = [
        'name',
        'tanggal_lahir',
        'tinggi_badan',
        'berat_badan',
        'jenis_kelamin',
        'gambar',
        'aktifitas_id',
        'email',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'email_verified_at' => 'datetime',
    ];

    public function aktifitas()
    {
        return $this->belongsTo(Aktifitas::class, 'aktifitas_id');
    }

    public function weights()
    {
        return $this->hasMany(UserWeight::class);
    }

    public function dailyEntries()
    {
        return $this->hasMany(DailyEntry::class);
    }


}
