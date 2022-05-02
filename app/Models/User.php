<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
   
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'prenom',
        'email',
        'type',
        'abonnement',
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

    public  function  entreprise ( ) : HasOne 
    { 
        return  $this -> hasOne ( Entreprise::class ) ; 
    }

    public  function  travailleur ( ) : HasOne 
    { 
        return  $this -> hasOne ( Travailleur::class ) ; 
    }

    public  function  job ( ) : HasOne 
    { 
        return  $this -> hasOne ( Job::class ) ; 
    }

    public  function  bio ( ) : HasOne 
    { 
        return  $this -> hasOne ( Bio::class ) ; 
    }

    public  function  bac ( ) : HasOne 
    { 
        return  $this -> hasOne ( Bac::class ) ; 
    }

    public  function  license ( ) : HasOne 
    { 
        return  $this -> hasOne ( License::class ) ; 
    }

    public  function  master ( ) : HasOne 
    { 
        return  $this -> hasOne ( License::class ) ; 
    }

    public  function  doctorat ( ) : HasOne 
    { 
        return  $this -> hasOne ( Doctorat::class ) ; 
    }

    public  function  skill ( ) : HasOne 
    { 
        return  $this -> hasOne ( Skills::class ) ; 
    }

    public  function  experience ( ) : HasOne 
    { 
        return  $this -> hasOne ( Experience::class ) ; 
    }

    public  function  attestation ( ) : HasOne 
    { 
        return  $this -> hasOne ( Attestation::class ) ; 
    }

    public  function    certification ( ) : HasOne 
    { 
        return  $this -> hasOne ( Certification::class ) ; 
    }

    public  function    etude ( ) : HasOne 
    { 
        return  $this -> hasOne ( Etude::class ) ; 
    }
}
