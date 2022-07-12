<?php

namespace App\Http\Livewire;

use App\Models\Notif;
use Livewire\Component;

class NotificationsPages extends Component
{
    public function render()
    {
        $this->notifs =Notif::where('user_id','=',auth()->user()->id)->orderBy('id','desc')->get();
        return view('livewire.notifications-pages',['notifs'=>$this->notifs]);
    }
    public function getListeners()
    {
        return [
            "echo-private:new-notif.".auth()->user()->id.",newnotif" => 'hoy',
        ];
    }
    public $notifs;

    public function readNotif($url,$notif_id){
        $notifUpdate = Notif::findOrFail($notif_id);
        $notifUpdate->read_status = true;
        $notifUpdate->save();
        redirect($url);
    }
}
