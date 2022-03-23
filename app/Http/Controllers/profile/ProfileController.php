<?php

namespace App\Http\Controllers\profile;

use App\Models\User;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $user = User::all();
        return view('profile.index', ['users'=>$user]);
    }
}
