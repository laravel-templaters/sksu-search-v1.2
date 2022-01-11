<?php

namespace App\Http\Livewire\Client\Users;

use App\Models\Department;
use App\Models\position;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class CreateNewUser extends Component
{

    public $first_name;
    public $middle_name;
    public $last_name;
    public $suffix;
    public $email;
    public $birthday;
    public $contact;
    public $photo;
    public $department;
    public $position;

    public function render()
    {
        return view('livewire.client.users.create-new-user',['departments'=>Department::get(), 'positions'=>position::get()])->layout('layouts.app');
    }

    public function submit_user(){

        $this->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'contact' => 'required',
            // 'department' => 'required',
            // 'position' => 'required',
             ],
            [
            'first_name.required' => 'First name required.',
            'middle_name.required' => 'Middle name is required.',
            'last_name.required' => 'Last name is required.',
            'email.required' => 'The email field is required.',
            'birthday.required' => 'The birthday field is required.',
            'contact.required' => 'The contact field is required.', 
            // 'department.required' => 'The department field is required.',    
            // 'position.required' => 'The position field is required.', 
            ]);
            $fullname = $this->first_name . " " . $this->middle_name . " " . $this->last_name;
            // $departments = Department::where("department_name", "=",  $this->department)->first();
            // $positions = position::where("position_name", "=",  $this->position)->first();
            //Carbon::createFromFormat('Y-m-d', $this->birthday)->format('F d, Y');
            //dd($this->department);
             $user = new User;
             $user->name = $fullname;
             $user->suffix =  $this->suffix;
             $user->birth_day = $this->birthday;
             $user->contact_number = $this->contact;
             $user->email  = $this->email;
             $user->password = Hash::make($this->last_name . "123");;
             $user->role_id = "3";
             $user->department_id =  $this->department;
             $user->position_id = $this->position;

            // $user->profile_photo_path = "1"; 
             $user->save();
            return redirect()->route('create-new-user');  
    }
}

