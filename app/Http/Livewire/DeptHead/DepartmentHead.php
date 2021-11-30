<?php

namespace App\Http\Livewire\DeptHead;

use Livewire\Component;
//models
use App\Models\TravelOrder;
use App\Models\DisbursementVoucher;
//use App\Models\LastAction;
use App\Models\DvProgress;       
use App\Models\Milestone;       
//use App\Models\User;
//use App\Events\ForwardDV;
//use Illuminate\Support\Facades\Auth;
class DepartmentHead extends Component
{
    public $personalClicked=true;
    public $pendingClicked=true;
    public $showBanner=false;
    public $active = "myacc";
    public $pending_dv;
    public $readyToLoad = false;
    public $milestone;
    public $greetings =['Heyyy','Hello','Yo, What\'s up', 'What\'s up buttercup',];
    public $greeting = 'Good day!';
    public function loadPosts()
    {
        $this->readyToLoad = true;
    }
    public function render()
    {
         $this->milestones = Milestone::where('assigned_user','=',auth()->user()->id)->where('isActive','=','1')->where('is_completed','=','0')->get();
        $this->pending_dv = $this->readyToLoad ? DisbursementVoucher::where('user_id','=',auth()->user()->id)->get() : [];
        return view('livewire.dept-head.department-head')->layout('layouts.accountant');
    }
    public function populateTable(){
        $this->greeting = $this->greetings[rand(0,(count($this->greetings)-1))];
        $this->pendingClicked = false;
        $this->showBanner =true;
        $this->milestone = Milestone::where('assigned_user','=',auth()->user()->id)->where('isActive','=','1')->where('is_completed','=','0')->get();
    }
    public function getListeners()
    {
        return [
            "echo-private:forward-dv.".auth()->user()->id.",ForwardDV" => 'populateTable',
           
        ];
    }
}
