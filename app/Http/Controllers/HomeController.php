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
        }else if($role == 3){
          // event(new ForwardDV(Auth::user(), 'hello gabriel'));
           return redirect()->route('client-dash');
        }else if($role == 2){

                //temporary fix
            if(Auth::user()->department->admin_user != null){
                if (Auth::user()->department->admin_user->id == Auth::user()->id || Auth::user()->department->head_user->id == Auth::user()->id) {
                    return redirect()->route('accountant-dashboard');
                } else {
                    return redirect()->route('department-head');
                }
                
            }else{
                return redirect()->route('department-head');
            }
        
         }else if($role == 4){
                 //temporary fix
            if(Auth::user()->department->admin_user != null){
                if (Auth::user()->department->admin_user->id == Auth::user()->id || Auth::user()->department->head_user->id == Auth::user()->id) {
                    
                } else {
                    return redirect()->route('accountant-dashboard');
                }
                
            }else{
                return redirect()->route('accountant-dashboard');
            }
           
         }
         else if($role == 5){
            if(Auth::user()->department->admin_user != null){
                if (Auth::user()->department->admin_user->id == Auth::user()->id || Auth::user()->department->head_user->id == Auth::user()->id) {
                    
                } else {
                    return redirect()->route('budget-dashboard');
                }
                
            }else{
                return redirect()->route('budget-dashboard');
            }
           
         }
    }
    public function test()
    {
        //dd("hello".Auth::user()->name);
      
    }
}
