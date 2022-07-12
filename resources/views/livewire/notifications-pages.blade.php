<div class="block bg-white">
    <div class="flex justify-between px-3 pt-2 border-b border-primary-300">
      <div><h2 class="font-bold">Notifications</h2></div>
      <div><a href="#" class="text-indigo-400">Mark All as Read</a></div>
    </div>
    <div id="notifs" class="block">
        @if (count($notifs) >0)
            @foreach ($notifs as $notif)
            <button type="button" x-data="{read_status : {{ $notif->read_status }} }" class="block w-full text-left break-words group group-hover:cursor-pointer"  wire:click="readNotif('{{ $notif->route_url }}','{{ $notif->id }}')">
                <li class="pl-3 text-xs rounded-md group hover:bg-primary-100" :class="read_status == false ? 'bg-gray-100' : ''">
                    <span class="text-black" >{{ $notif->message }}</span>
                </li>
                <div class="flex-1 px-3 py-1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eum blanditiis natus ea aspernatur voluptates veniam, consectetur culpa dolorum sint quas, nihil molestias expedita cum similique iure nulla. Dicta, nobis?
                </div>
            </button>
            
            @endforeach            
        @else
        <div class="block h-screen text-center break-words max-h-screen-80">
            <div class="flex-1 px-3 py-2">
                <span class="text-lg italic font-extrabold tracking-widest">Nothing to Show</span>
            </div>
        </div>        
        @endif
        
    </div>
</div>
