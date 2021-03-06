<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $userExists = User::where('provider_id', $user->id)->where('email', $user->email)->first();
            
            $finduser = User::where('email', $user->email)->first();
            $str =  $user->email;
            //$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@(?gmail|sksu\.edu\.ph$)^";
            //$res = preg_match_all($pattern, $str);
            
            //if($res >= 1){
                if($finduser)
                {
                    //dd($user);
                    if($finduser->provider_id == null || $finduser->provider_id == ""){
                        
                        $finduser = User::find($finduser->id);
                        $finduser->name = $user->name;
                        $finduser->email =$user->email;
                        $finduser->email_verified_at = $user->user['verified_email'] == true ? Carbon::now() : null;
                        $finduser->provider_id = $user->id;
                        $finduser->avatar = $user->avatar;
                        $finduser->save();
                        Auth::login($finduser);
                        return redirect()->route('redirect');
                    }else{
                        Auth::login($finduser);
                        return redirect()->route('redirect');
                    }
                    
                }else{
                    
                    // $newUser = new User;
                    // $newUser->name = $user->name;
                    // $newUser->email =$user->email;
                    // $newUser->provider_id = $user->id;
                    // $newUser->avatar = $user->avatar;
                    // $newUser->email_verified_at = $user->user['verified_email']  == true ? Carbon::now() : null;
                    // $newUser->role_id =3;
                    // $newUser->department_id =50;
                    // $newUser->position_id =10;
                    // $newUser->save();
                    // Auth::login($newUser);
                    return redirect()->route('401-error');
                }
            // }else{
            //     return redirect()->route('401-error');
            // }
           
    
        } catch (Exception $e) {
            
            dd($e);
        }
    }
}