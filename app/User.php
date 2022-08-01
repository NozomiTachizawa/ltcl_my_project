<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;
use App\Like;


class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
    
    public function getOwnPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('reviews')->find(Auth::id())->reviews()->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function liked_reviews()
    {
        return $this->hasManyThrough('App\Review', 'App\Like', 'user_id', 'id', null, 'review_id');
    }
    
    public function getOwnLikedPaginatedByLimit(int $limit_count = 5)
    {
        return $this::with('reviews')->find(Auth::id())->liked_reviews()->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
