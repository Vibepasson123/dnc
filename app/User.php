<?php

namespace App; 



use Illuminate\Notifications\Notifiable; 
use Cartalyst\Sentinel\Users\EloquentUser; 
use Illuminate\Auth\Authenticatable; 
use Tymon\JWTAuth\Contracts\JWTSubject as AuthenticatableUserContract; 
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract; 


class User extends EloquentUser implements AuthenticatableUserContract, AuthenticatableContract {
use Notifiable, Authenticatable; 

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
protected $fillable = [
        'email', 
        'depart', 
        'position', 
        'password', 
        'last_name', 
        'first_name', 
        'permissions', 
        'employee_id', 
        'mobile'
    ]; 

/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
protected $hidden = [
        'password', 'remember_token', 
]; 

public static function byEmail($email) {
return static::whereEmail($email) -> first(); 
}
public function getJWTIdentifier() {
return $this -> getKey(); 
}
public function getJWTCustomClaims() {
return []; 
}
public function employee_sat() {
return $this -> hasMany(activation::class); 
}
public function thval() {
return $this -> hasMany(throttle::class); 
}

}
