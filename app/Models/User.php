<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        'firstname','postal',
        'lastname','username',
        'middlename','street',
        'phone','city',
        'email','state','photo',
        'country', 'is_admin',
        'password_text',
        'password',
        'banned_until'
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
    protected $dates = ['banned_until'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullnameAttribute()
    {
        return ucfirst($this->attributes['firstname']) . " ". ucfirst($this->attributes['lastname']);
    }

    public function scopeSearch($query, $term)
    {
        return $query->where('firstname','LIKE','%'.$term.'%')
            ->orWhere('lastname','LIKE','%'.$term.'%')
            ->orWhere('middlename','LIKE','%'.$term.'%')
            ->orWhere('username','LIKE','%'.$term.'%')
            ->orWhere('city','LIKE','%'.$term.'%')
            ->orWhere('state','LIKE','%'.$term.'%')
            ->orWhere('country','LIKE','%'.$term.'%')
            ->orWhere('street','LIKE','%'.$term.'%')
            ->orWhere('email','LIKE','%'.$term.'%');
    }

    public function getBannedUntilAttribute($value)
    {
        if (!empty($value))
        {
            return true;
        }
        return false;
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
    public function investments()
    {
        return $this->hasMany(Investment::class);
    }

}
