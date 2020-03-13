<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guard_name = [
        'super-admin',
        'admin',
        'instructor',
        'registrar',
        'cashier',
        'trainee',
        'web'
    ];

    public function posts()
{        return $this->hasMany('App\Post');
        
    }

    public function courses(){
        return $this->hasMany('App\Course');
        
    }

    public function scheds(){
        return $this->hasMany('App\Sched');
        
    }

    public function files(){
        return $this->hasMany('App\File');
        
    }
}
