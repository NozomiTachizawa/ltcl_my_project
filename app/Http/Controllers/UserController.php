<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Like;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('User.index')->with(['own_reviews' => $user->getOwnPaginateByLimit()]);
    }
    
    public function liked_index(User $user)
    {
        return view('User.liked_index')->with(['own_liked_reviews' => $user->getOwnLikedPaginatedByLimit()]);
    }
}
