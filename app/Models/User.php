<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    use SoftDeletes;


    protected $connection = 'mysql';
 
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
    ];


    public function getIsChairpersonAttribute()
    {
        return $this->roles->pluck( 'name' )->contains( 'chairperson' );
    }

    public function getIsLeaderAttribute()
    {
        return $this->roles->count()>0;
    }

    public function getProfileCompleteAttribute(){
        return !empty($this->fname) && !empty($this->lname)  
        && !empty($this->campus) && !empty($this->current_institution) 
        && !empty($this->year_of_study) && !empty($this->phone_number) 
        && !empty($this->course) && !empty($this->id_number) 
        && !empty($this->village) && !empty($this->admission_number);
    }
   

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

 
    protected $appends = [
        'profile_photo_url',
    ];

    public function getFullNameAttribute(){
        return ucfirst($this->fname).' '.(ucfirst($this->lname));
    }

    public function getNameAttribute(){
        return ucfirst($this->fname).' '.(ucfirst($this->lname));
    }

}
