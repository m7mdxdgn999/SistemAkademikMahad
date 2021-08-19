<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class Dosen extends Authenticatable implements MustVerifyEmail
{
    use Notifiable,HasRoles;
  
    protected $fillable=[
        'email','nip', 'password','kode_dosen','kode_mabna' ,'nama_dosen',  'no_hp_dosen'
    ];

    public function mabna(){
        return $this->belongsTo('App\Mabna','kode_mabna','kode_mabna');
    }

    protected $table = 'dosen';
    // protected $primaryKey='kode_dosen';
    // protected $keyType = 'string';
    
    // public $incrementing = false;

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
