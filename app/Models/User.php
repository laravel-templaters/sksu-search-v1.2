<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function disbursement_vouchers(){
        return $this->hasMany('App\Models\DisbursementVoucher');
    }

    public function travel_order(){
        return $this->hasMany('App\Models\TravelOrder');
    }

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    public function department(){  
        return $this->hasOne('App\Models\Department','id','department_id');
    }
    public function departments(){  
        return $this->belongsTo('App\Models\Department');
    }

    public function position(){
        return $this->belongsTo('App\Models\position');
    }
    public function last_action(){
        return $this->belongsTo('App\Models\LastAction');
    }
    public function signatory(){
          return $this->belongsTo('App\Models\Signatories');
    }
    public function milestone(){
          return $this->belongsTo('App\Models\Milestone');
    }
    public function folder_document(){
        return $this->belongsTo('App\Models\FolderDocument');
    }
    public function side_note(){  
        return $this->belongsTo('App\Models\SideNote');
    }
    public function travel_order_applicant(){  
        return $this->belongsTo('App\Models\TravelOrderApplicant');
    }
    public function travel_order_signatory(){  
        return $this->belongsTo('App\Models\TravelOrderSignatory');
    }
    
}
