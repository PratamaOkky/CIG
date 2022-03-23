<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\User;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gender = Gender::all();
        $user = User::with('gender')->get();
        return view('dashboard', ['gender'=>$gender]);
    }
}
