<?php

namespace App;
use App\Model\UserInfo;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User  extends EloquentUser
{
    use  SoftDeletes;

    // protected static $logAttributes = ['first_name', 'last_name', 'email', 'phone'];
    protected $fillable = ['first_name', 'last_name', 'email', 'phone','password'];

    // public function getDescriptionForEvent(string $eventName): string
    // {
    //     return "This model has been {$eventName}";
    // }
    // protected static $logName = 'User';
    // protected static $logOnlyDirty = true;

    public function userInfo(){
        return $this->hasMany(UserInfo::class, 'user_id');
    }

}
