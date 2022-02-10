  <div>
  @livewire('itenerary-view', ['gen' => $g, 'per_diem' =>isset($diems) ? $diems : '0.00','travel_order_id' => $travelOrderForpassingID,'is_edit'=>$isEdit], key($g))
  </div>