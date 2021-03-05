<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function note()
    {
        return Notes::where("user_id", $this->id)->first();
    }

    public function websites()
    {
        return websites::where("user_id", $this->id)->get();
    }

    public function todos()
    {
        return todos::where("user_id", $this->id)->get();
    }

    public function pics()
    {
        return Images::where("user_id", $this->id)->get();
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes["password"] = bcrypt($value);
    }
}
