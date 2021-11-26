<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role_id;

        if($role == 1)
        {
            return redirect()->route('dashboard');
        }else if($role == 3){
           return redirect()->route('client-dash');
        }else if($role == 2){
            return redirect()->route('department-head');
         }
    }
}
