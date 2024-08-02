<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Asset;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'firstname',
        'lastname',
        'status',
        'account_user_type',
        'user_type',
        'phone_number',
        'successful_sales',
        'govt_id',
        'cac_document',
        'business_address',
        'business_state',
        'is_active',
        'badge',
        'email',
        'password',
        'email_verified_at'
    ];



    public function updateBadge()
    {
        $badges = [
            10 => 'Bronze',
            20 => 'Silver',
            30 => 'Gold',
            50 => 'Diamond',
            100 => 'Platinum',
        ];

        foreach ($badges as $sales => $badge) {
            if ($this->successful_sales >= $sales) {
                $this->badge = $badge;
            }
        }

        $this->save();
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->uuid = static::generateUUID();
        });
    }


    private static function generateUUID()
    {
        return 'E' . substr(str_shuffle('0123456789'), 0, 6);
    }

    public function assets()
    {
        return $this->hasMany(Asset::class);
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


    public function isBlocked()
    {
    return $this->status === 'blocked';
    }

    public function block()
    {
    $this->status = 'blocked';
    $this->save();
    }

    public function unblock()
    {
    $this->status = 'active';
    $this->save();
    }

    

    protected function firstName(): Attribute{
        return Attribute::make(
        get: fn(string $value) => ucfirst($value),
        )->withoutObjectCaching();
    }

    protected function lastName(): Attribute{
        return Attribute::make(
        get: fn(string $value) => ucfirst($value),
        )->withoutObjectCaching();
    }

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
}
