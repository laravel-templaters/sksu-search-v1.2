<div>
    @foreach ($gen as $g)
            <div wire:key='{{ $loop->index }}'>
                @if (count($gen)==1)
                    @livewire('itenerary-view', ['gen' => $g, 'per_diem' =>isset($diems) ? $diems : '0.00','travel_order_id' => $travelOrderForpassingID,'is_edit'=>$isEdit, 'is_diem_half'=>true], key($g))
                @else
                    @if ($loop->index+1 == count($gen))
                    @livewire('itenerary-view', ['gen' => $g, 'per_diem' =>isset($diems) ? $diems : '0.00','travel_order_id' => $travelOrderForpassingID,'is_edit'=>$isEdit, 'is_diem_half'=>true], key($g))
                    @else
                        @livewire('itenerary-view', ['gen' => $g, 'per_diem' =>isset($diems) ? $diems : '0.00','travel_order_id' => $travelOrderForpassingID,'is_edit'=>$isEdit, 'is_diem_half'=>false], key($g))
                    @endif
                @endif
            </div>
    @endforeach
</div>
