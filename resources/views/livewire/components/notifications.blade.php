<div class="max-h-screen mt-3 -mx-2 overflow-y-auto bg-white rounded-md h-screen-80 -px-6">
    <ul role="list" class="mx-2 ">
        @foreach ($users as $user_info)
        <li class="px-6 py-4 my-2 rounded-md group hover:bg-primary-100" wire:click="hoy">
            <span class="text-black" >{{ $user_info->name }}</span>
        </li>
        @endforeach
    </ul>
    @push('scripts')
        <script>
            //Listen for wire event notify
            Livewire.on('notify', () => {
                
                const sound = new Audio('./ringtones/notif-pop.wav');
                sound.play();

            })
        </script>
    @endpush
</div>
