<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password_plain',
        'password_hash',
        'superadmin',
        'shop_name',
        'remember_token',
        'created_at',
        'updated_at',
        'card_brand',
        'card_last_four',
        'trial_ends_at',
        'shop_domain',
        'is_enabled',
        'billing_plan',
        'trial_starts_at'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password_plain',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'superadmin' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'trial_ends_at' => 'datetime',
        'trial_starts_at' => 'datetime',
        'is_enabled'=> 'boolean'
    ];

    // returns hash password for authentication
    public function getAuthPassword() {
        return $this->password_hash;
    }
}
