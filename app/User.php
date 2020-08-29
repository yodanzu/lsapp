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
        'name',
        'firstName',
        'lastName',
        'birthDate',
        'address',
        'phoneNumber',
        'userType',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guard_name = 'web';

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

    public function roles(){
        return $this->hasMany('App\Role');
        
    }

    public function permissions(){
        return $this->hasMany('App\Permission');
        
    }
    
}
