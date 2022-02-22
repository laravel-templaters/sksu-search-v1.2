<?php

namespace App\Http\Livewire\Components;

use App\Models\Notif;
use App\Models\User;
use Livewire\Component;

class Notifications extends Component
{
    public function render()
    {
        return view('livewire.components.notifications',['notifs'=>Notif::where('user_id','=',auth()->user()->id)->get()]);
    }
    public function getListeners()
    {
        return [
            "echo-private:new-notif.".auth()->user()->id.",newnotif" => 'hoy',
        ];
    }
    public function hoy(){
        $this->emit('notify');
    }
    public function readNotif($url,$notif_id){
        $notifUpdate = Notif::findOrFail($notif_id);
        $notifUpdate->read_status = true;
        $notifUpdate->save();
        redirect($url);
    }
}
