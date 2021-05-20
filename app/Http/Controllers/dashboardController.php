<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){
        if (Auth::user()->hasRole('admin')){
            return view('admindashboard');
        }
        elseif (Auth::user()->hasRole('moderator')){
            return view('modashboard');
        }
        elseif (Auth::user()->hasRole('user')){
            return view('dashboard');
        }
    }
}
