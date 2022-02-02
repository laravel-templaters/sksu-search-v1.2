<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\ForwardDV;

class HomeController extends Controller
{ 
    public function index()
    {
        $role = Auth::user()->role_id;
      
        if($role == 1)
        {
            return redirect()->route('dashboard');
            
        }else if($role == 2){

            return redirect()->route('department-head');
        
         }else if($role == 3){

           return redirect()->route('department-head');

         }else if($role == 4){
              
            return redirect()->route('accountant-dashboard');
           
         }
         else if($role == 5){

            return redirect()->route('budget-dashboard'); 
                      
         }
         else if($role == 6){

            return redirect()->route('department-head'); 
                      
         }
         else if($role == 7){

            return redirect()->route('archiver-main');
                      
         }

         
    }
    public function test()
    {
        //dd("hello".Auth::user()->name);
      
    }
}
