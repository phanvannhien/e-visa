<?php

namespace App;

use App\Filters\Filterable;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Countries;
use App\Models\Message;
use App\Models\Order;
use App\Models\UserAddress;
use App\Models\UserRecentView;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Visa\Entities\Booking;
use Modules\Visa\Entities\Payment;


class User extends Authenticatable
{
    use Filterable;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'full_name',
        'gender',
        'dob',
        'phone',
        'status',
        'locked',
        'email',
        'password',
        'group_code',
        'avatar',
        'user_name',
        'address',
        'country_code',

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

    //

    public function getAvatarAttribute(){
        return 'https://avatars2.githubusercontent.com/u/6233216?s=460&v=4';
    }
    public function getAvatar(){
        return 'https://avatars2.githubusercontent.com/u/6233216?s=460&v=4';
    }

    //

    public function getFriendStatus( $contact_id ){
        return $this->contacts()->where( 'contact_id',$contact_id )->first();
    }

    public function getLevel(){
        return 'Standard';
    }

    public function getStatus(){
        if( $this->status ){
            return '<span class="label label-success">Đang hoạt động</span>';
        }
        return '<span class="label label-danger">Đang bị khoá</span>';
    }



    //Relations

    public function products(){
        return $this->hasMany( Product::class );
    }

    public function contacts(){
        return $this->hasMany( Contact::class );
    }


    public function messages(){
        return $this->hasMany( Message::class );
    }

    public function addressBook(){
        return $this->hasMany( UserAddress::class );
    }

    public function orders(){
        return $this->hasMany( Booking::class );
    }

    public function make_payments(){
        return $this->hasMany( Payment::class, 'user_id' );
    }

    public function country(){
        return $this->belongsTo( Countries::class, 'country_code','code' );
    }
}
