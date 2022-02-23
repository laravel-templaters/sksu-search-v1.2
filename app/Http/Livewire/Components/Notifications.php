<?php

namespace App\Http\Livewire\Components;

use App\Models\Notif;
use App\Models\User;
use Livewire\Component;

class Notifications extends Component
{
    public $notifs;
    public function render()
    {
        $this->notifs =Notif::where('user_id','=',auth()->user()->id)->orderBy('id','desc')->get();
        return view('livewire.components.notifications',['notifs'=>$this->notifs]);
    }
    public function getListeners()
    {
        return [
            "echo-private:new-notif.".auth()->user()->id.",newnotif" => 'hoy',
        ];
    }
    public function hoy(){
        $this->emit('notify');
        $this->notifs=null;
    }
    public function readNotif($url,$notif_id){
        $notifUpdate = Notif::findOrFail($notif_id);
        $notifUpdate->read_status = true;
        $notifUpdate->save();
        redirect($url);
    }
}
