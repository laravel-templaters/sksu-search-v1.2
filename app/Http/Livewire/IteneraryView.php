<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\IteneraryEntry;
use App\Models\Itenerary;
use Carbon\Carbon;
use App\Http\Livewire\Sec\To\TravelOrderMain;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

// use App\Models\Itenerary;

class IteneraryView extends Component
{
    public $travelOrderId=0;
    public $isEdit=false;
    public $isPopulating=false;

    public $gen;
    public $i = 1;
    public $date_from;
    public $date_to;
    public $diff;
    public $per_diem;
    public $temp_diem=array();
    public $final_diem;
    public $isSet_per_diem = false;
    public $draftSaved=false;
    public $oldIteneraryID;
    public $itenerary;

    public $showDays = false;
    public $total;

    public $finalTotalperDay;

    
    public $input = [
        [
        "date" => "",
        "place" => "",
        "dep_time" => "",
        "arr_time" => "",
        "mot" => "",
        "trans_exp" => "",
        "per_diem"=>"",
        "others" => "",
        "total" => "",
        "breakfast" => "",
        "lunch" => "",
        "dinner" => "",
        "lodging" => "",
        'raw_diem'=>"",
        'raw_total'=>0.0,
        ],
                    ];
           

    public $listeners = [
        'storeIteneraryDraft'=>'storeIteneraryDraft',
        'storeItenerary'=>'storeItenerary',
        'sendTotalVal'=>'sendTotalVal',
        'valIE' => 'validateIEs', 
    ];

 
                
//hooks
    public function updated($name,$value){
        if ($this->isPopulating==false) {
            $this->emit('childUpdated',$name,$value);
            $temp=explode('.',$name);
            $this->ComputeDiem($temp[1],'notimportant');
        }
        
    }

    public function mount($gen, $per_diem, $travel_order_id,$is_edit)
    {
        // dd($gen);
        $this->gen = $gen;
        $this->per_diem = $per_diem;
        $this->travelOrderId=$travel_order_id;
        $this->isEdit=$is_edit;
      
        if ($this->isEdit == 1 || $this->isEdit == true) {
              $this->isPopulating=true;
              $this->populateTable();
        } 
        

        if($this->per_diem != "0.00")
        {
            if(!isset($this->temp_diem[0])){
                $this->temp_diem[0]=$this->per_diem['amount'];

                $this->input[0]['raw_diem'] =  $this->temp_diem[0];
                $this->input[0]['per_diem'] =  number_format($this->temp_diem[0],2);
            }  
        }else{
            //whatodo...
            $this->isSet_per_diem = true;
            
        }

       
        // if(isset($this->per_diem)){
        //     if(!isset($this->temp_diem[0])){
        //         $this->temp_diem[0]=$this->per_diem['amount'];
        //     }   
        // }else{
        //     if(!isset($this->temp_diem[0])){
        //         $this->temp_diem[0]=$this->per_diem['amount'];
        //     }  
        // }
        

    //     $this->input = [[
    //         "per_diem" => isset($this->per_diem) ? number_format($this->per_diem['amount'],2) : ""
    //  ],];
      
    }

    public function render()
    {   
 
        // dd($this->input);
        if (isset($this->input)) {
            foreach ($this->input as $key => $value) {
                if (isset($this->input[$key]['trans_exp'])||isset($this->input[$key]['per_diem'])||isset($this->input[$key]['others'])) {
                        $this->ComputeDiem($key,'ratcoding');
                        
                }
            }

        }
        return view('livewire.itenerary-view')->with(['isset_per_diem' => $this->isSet_per_diem]);
       
        
    }

    
    

    public function addmain(){
        // dd($i);
        
        
        $this->i= $this->i+1;
        array_push($this->input,array(
            "date" => "",
            "place" => "",
            "dep_time" => "",
            "arr_time" => "",
            "mot" => "",
            "trans_exp" => "",
            "per_diem"=>"",
            "others" => "",
            "total" => "",
            "breakfast" => "",
            "lunch" => "",
            "dinner" => "",
            "lodging" => "",
            'raw_diem'=> "",
            'raw_total'=>0.0,
        ));
        
    }

  

    public function removemain($i)
    {
        unset($this->input[$i]);
    }

    public function generateDays()
    {
             if(is_null($this->date_from) || is_null($this->date_to))
        {
            $this->showDays = false;
            $this->err_diff = false;
            $this->err_from_to = true;
        }else{
            $from = Carbon::createFromFormat('Y-m-d', $this->date_from)->format('d');
            $to = Carbon::createFromFormat('Y-m-d', $this->date_to)->format('d');
            $this->diff = $to - $from;
            if($this->date_to < $this->date_from)
            {
               // dd( $from = Carbon::createFromFormat('Y-m-d', $this->date_from)->format('M'));
               $this->showDays = false;
                $this->err_from_to = false;
                $this->err_diff = true;
            }else{     
              
                  TravelOrderMain::createDateRangeArray($this->date_from, $this->date_to);

                    
                    
                    $this->showDays = true;

            }  
        }   
    }

   


    public function validateTime($key)
    {
        $dep_time = $this->input[intval($key)]["dep_time"];
        $arr_time = $this->input[intval($key)]["arr_time"];
        // dd($key);
        
        if($dep_time != "" && $arr_time != "") 
        {
            if($dep_time >= $arr_time)
            {

                // $this->alert('warning', 'Invalid Time!', [
                //             'background' => '#fff',
                //             'padding' => '0.5rem',
                //             'position' =>  'bottom-start', 
                //             'timer' =>  3000,  
                //             'toast' =>  true, 
                //             'text' =>  '', 
                //             'confirmButtonText' =>  'Ok', 
                //             'cancelButtonText' =>  'Cancel', 
                //             'showCancelButton' =>  false, 
                //             'showConfirmButton' =>  false, 
                //       ]);

               session()->flash('message', 'Invalid Time');
                $this->input[$key]['arr_time'] = "";
                $this->input[$key]['dep_time'] = "";

                // $this->reset($this->input[0]["dep_time"]);
                // $this->reset($this->input[0]["arr_time"]);
            }
        }
        
         
    }


    function ComputeDiem($key,$type){
        $switchk = false;
        switch ($type) {
            case 'breakfast':
                if($this->input[intval($key)]['breakfast']==1){
                    $addition = $this->temp_diem[0] * 0.1;
                    $this->input[intval($key)]['raw_diem'] = ((float)$this->input[intval($key)]['raw_diem']) - $addition;
                    $this->input[intval($key)]['per_diem'] =  number_format($this->input[intval($key)]['raw_diem'],2);
                }else{
                   
                    $deduction = $this->temp_diem[0] * 0.1;
                    $this->input[intval($key)]['raw_diem'] = $this->input[intval($key)]['raw_diem'] + $deduction;
                    $this->input[intval($key)]['per_diem'] =  number_format($this->input[intval($key)]['raw_diem'],2);
                }

                $switchk = true;
                break;
            case 'lunch':
                if($this->input[intval($key)]['lunch']==1){
                   
                    $addition = $this->temp_diem[0] * 0.1;
                    $this->input[intval($key)]['raw_diem'] = ((float)$this->input[intval($key)]['raw_diem']) - $addition;
                    $this->input[intval($key)]['per_diem'] =  number_format($this->input[intval($key)]['raw_diem'],2);
                }else{
                   
                    $deduction = $this->temp_diem[0] * 0.1;
                    $this->input[intval($key)]['raw_diem'] = $this->input[intval($key)]['raw_diem'] + $deduction;
                    $this->input[intval($key)]['per_diem'] =  number_format($this->input[intval($key)]['raw_diem'],2);
                }
                $switchk = true;
                break;
            case 'dinner':
                if($this->input[intval($key)]['dinner']==1){
                    
                    $addition = $this->temp_diem[0] * 0.1;
                    $this->input[intval($key)]['raw_diem'] = ((float)$this->input[intval($key)]['raw_diem']) - $addition;
                    $this->input[intval($key)]['per_diem'] =  number_format($this->input[intval($key)]['raw_diem'],2);
                }else{
                   
                    $deduction = $this->temp_diem[0] * 0.1;
                    $this->input[intval($key)]['raw_diem'] = $this->input[intval($key)]['raw_diem'] + $deduction;
                    $this->input[intval($key)]['per_diem'] =  number_format($this->input[intval($key)]['raw_diem'],2);
                }
                $switchk = true;
                break;
            case 'lodging':
                if($this->input[intval($key)]['lodging']==1){
                   
                    $addition = $this->temp_diem[0] * 0.5;
                    $this->input[intval($key)]['raw_diem'] = ((float)$this->input[intval($key)]['raw_diem']) - $addition;
                    $this->input[intval($key)]['per_diem'] =  number_format($this->input[intval($key)]['raw_diem'],2);
                }else{
                   
                    $deduction = $this->temp_diem[0] * 0.5;
                    $this->input[intval($key)]['raw_diem'] = $this->input[intval($key)]['raw_diem'] + $deduction;
                    $this->input[intval($key)]['per_diem'] =  number_format($this->input[intval($key)]['raw_diem'],2);
                }
                $switchk = true;
                break;       
           
        }

               if ($key == 0 || $key == "0") {
                $trans = $this->input[intval($key)]['trans_exp'];
                $others = $this->input[intval($key)]['others'];
                if(($trans == "" || (float)$trans == 0) && ($others == "" || (float)$others == 0) && $this->input[intval($key)]['per_diem'] == "")
                {
                    
                    $this->input[intval($key)]['raw_total'] = 0.0;
                    $this->input[intval($key)]['total'] = "0.00";
        
                }else if(($trans == "" || (float)$trans == 0) && ($others == "" || (float)$others == 0))
                {
                    $this->total = ((float)$this->input[intval($key)]['raw_diem']);
                    $this->input[intval($key)]['raw_total'] = $this->total;
                    $this->input[intval($key)]['total'] = number_format($this->total,2);
                }
                else{
                    $this->total =  ((float)$this->input[intval($key)]['trans_exp']) + ((float)$this->input[intval($key)]['others']) + ((float)$this->input[intval($key)]['raw_diem']);
                    $this->input[intval($key)]['raw_total'] = $this->total;
                    $this->input[intval($key)]['total'] = number_format($this->total,2);
                    $this->sendTotalVal();
                }
                   
               }else{
                $trans = $this->input[intval($key)]['trans_exp'];
                $others = $this->input[intval($key)]['others'];
                if(($trans == "" || (float)$trans == 0) && ($others == "" || (float)$others == 0))
                {
                    $this->input[intval($key)]['total'] = "0.00";
                    $this->input[intval($key)]['raw_total'] = 0.0;
        
                }else if(($trans == "" || (float)$trans == 0) && ($others == "" || (float)$others == 0))
                {
                    $this->total = 0.0;
                    $this->input[intval($key)]['raw_total'] = $this->total;
                    $this->input[intval($key)]['total'] = number_format($this->total,2);
                }
                else{
                    $this->total =  ((float)$this->input[intval($key)]['trans_exp']) + ((float)$this->input[intval($key)]['others']);
                    $this->input[intval($key)]['raw_total'] = $this->total;
                    $this->input[intval($key)]['total'] = number_format($this->total,2);
                    $this->sendTotalVal();
                }
               }
               
    }

    
    //test for saving


    public function validateIEs(){
        // dd('sup?');
        // $this->validate([
        //     'input.*.place' => 'required',
        //     'input.*.dep_time' => 'required',
        //     'input.*.arr_time' => 'required',
        //     'input.*.mot' => 'required',
        //     'input.*.trans_exp' => 'required',
        //     'input.*.others' => 'required',
        //     'input.*.total' => 'required',
        // ],
        // [
        //     'input.*.place' => 'This field is required',
        //     'input.*.dep_time' => 'This field is required',
        //     'input.*.arr_time' => 'This field is required',
        //     'input.*.mot' => 'This field is required',
        //     'input.*.trans_exp' => 'This field is required',
        //     'input.*.others' => 'This field is required',
        //     'input.*.total' => 'This field is required',
        // ]
        // );
        $this->emit('iteneraryValidated', true);
    }





    public function sendTotalVal(){
       
           // $this->validateIEs();
            $this->finalTotalperDay =0.0;
            foreach ($this->input as $key => $value) {
                $this->finalTotalperDay += (float)  $this->input[intval($key)]['raw_total'];
           }
           $this->emit('calculatetotalfromothers', $this->finalTotalperDay);
       
        
    }

    // public function showAlert($key){
        
    //     $this->alert('success', 'EMIT FROM PARENT LOLS'. $key, [
    //         'background' => '#ccffcc',
    //         'padding' => '0.5rem',
    //         'position' =>  'top-end', 
    //         'timer' =>  2500,  
    //         'toast' =>  true, 
    //         'text' =>  '', 
    //         'confirmButtonText' =>  'Ok', 
    //         'cancelButtonText' =>  'Cancel', 
    //         'showCancelButton' =>  false, 
    //         'showConfirmButton' =>  false, 
    //   ]);

    // }


    public function storeDraft($toID){
       
       
        $this->itenerary->is_breakfast_covered = $this->input[0]['breakfast'] == 1 ? '1' : '0';
        $this->itenerary->is_lunch_covered =  $this->input[0]['lunch'] == 1 ? '1' : '0';
        $this->itenerary->is_dinner_covered = $this->input[0]['dinner'] == 1 ? '1' : '0';
        $this->itenerary->is_lodging_covered = $this->input[0]['lodging'] == 1 ? '1' : '0';
        $this->itenerary->date = $this->input[0]['date'];
        $this->itenerary->perdiem = $this->input[0]['per_diem'];
        $this->itenerary->travel_order_id = $toID;
        $this->itenerary->save();
          //dd($this->itenerary);
        if ( isset($this->itenerary->id)) {
            $deleteAllEntries = IteneraryEntry::where('itenerary_id','=',$this->itenerary->id)->delete();
        }

        foreach($this->input as $key1 => $value1){
            $itenerary_entries = new IteneraryEntry;
            $itenerary_entries->place_to_be_visited = $this->input[$key1]['place'] != '' ? $this->input[$key1]['place'] :'';
            $itenerary_entries->departure_time =  $this->input[$key1]['dep_time'] != '' ? $this->input[$key1]['dep_time'] :'';
            $itenerary_entries->arrival_time = $this->input[$key1]['arr_time'] != '' ? $this->input[$key1]['arr_time'] :'';
            $itenerary_entries->mode_of_transport = isset($this->input[$key1]['mot']) ? $this->input[$key1]['mot'] : 0;
            $itenerary_entries->transport_expenses = isset($this->input[$key1]['trans_exp']) ? $this->input[$key1]['trans_exp'] : 0;
            $itenerary_entries->others = isset($this->input[$key1]['others']) ? $this->input[$key1]['others'] : 0;
            $itenerary_entries->total = $this->input[$key1]['total'];
            $itenerary_entries->itenerary_id = $this->itenerary->id;
            $itenerary_entries->save(); 

        }
    }


    public function storeIteneraryDraft($trans_id){
        if ($this->draftSaved == false){
            $this->itenerary = new Itenerary;
            $this->draftSaved = true;
            $this->storeDraft($trans_id);
         
        }else{
            $this->draftSaved = true;
            $this->storeDraft($trans_id);
        }
    }
    public function storeItenerary($trans_id)
    {
                        $itenerary = new Itenerary;
                        $itenerary->is_breakfast_covered = $this->input[0]['breakfast'] == 1 ? '1' : '0';
                        $itenerary->is_lunch_covered =  $this->input[0]['lunch'] == 1 ? '1' : '0';
                        $itenerary->is_dinner_covered = $this->input[0]['dinner'] == 1 ? '1' : '0';
                        $itenerary->is_lodging_covered = $this->input[0]['lodging'] == 1 ? '1' : '0';
                        $itenerary->date = $this->input[0]['date'];
                        $itenerary->perdiem = $this->input[0]['per_diem'];
                        $itenerary->travel_order_id = $trans_id;
                        $itenerary->save();
                    
                        foreach($this->input as $key1 => $value1){
                            $itenerary_entries = new IteneraryEntry;
                            $itenerary_entries->place_to_be_visited = $this->input[$key1]['place'];
                            $itenerary_entries->departure_time =  $this->input[$key1]['dep_time'];
                            $itenerary_entries->arrival_time = $this->input[$key1]['arr_time'];
                            $itenerary_entries->mode_of_transport = isset($this->input[$key1]['mot']) ? $this->input[$key1]['mot'] : 0;
                            $itenerary_entries->transport_expenses = isset($this->input[$key1]['trans_exp']) ? $this->input[$key1]['trans_exp'] : 0;
                            $itenerary_entries->others = $this->input[$key1]['others'];
                            $itenerary_entries->total = $this->input[$key1]['total'];;
                            $itenerary_entries->itenerary_id = $itenerary->id;
                            $itenerary_entries->save(); 
    
                        }

                        $this->emitUp('iteneraryStored');

    }

    protected function populateTable(){
        $itenerary_id = Itenerary::where('date','=',$this->gen)->where('travel_order_id','=',$this->travelOrderId)->get();
        
        if(count($itenerary_id)>0){
            $itenerary_ents = IteneraryEntry::where('itenerary_id','=',$itenerary_id[0]->id)->get();
            
            foreach ($itenerary_ents as $key => $entry) {
            if($key==0){
                
                $this->input[0]['date']=$itenerary_id[0]->date;
                $this->input[0]['place']=$entry->place_to_be_visited;
                $this->input[0]['dep_time']=$entry->departure_time;
                $this->input[0]['arr_time']=$entry->arrival_time;
                $this->input[0]['mot']=$entry->mode_of_transport;
                $this->input[0]['trans_exp']=$entry->transport_expenses;
                $this->input[0]['per_diem']=$itenerary_id[0]->perdiem;
                $this->input[0]['others']=$entry->others;
                $this->input[0]['total']=$entry->total;
                $this->input[0]['breakfast']=$itenerary_id[0]->is_breakfast_covered;
                $this->input[0]['lunch']=$itenerary_id[0]->is_lunch_covered;
                $this->input[0]['dinner']=$itenerary_id[0]->is_dinner_covered;
                $this->input[0]['lodging']=$itenerary_id[0]->is_lodging_covered;
                $this->input[0]['raw_diem']=$itenerary_id[0]->perdiem;
                $this->input[0]['raw_total']=$itenerary_id[0]->perdiem;
            }else{
                $this->i= $this->i+1;
                array_push($this->input,array(
                    "date" => $itenerary_id[0]->date,
                    "place" => $entry->place_to_be_visited,
                    "dep_time" => $entry->departure_time,
                    "arr_time" => $entry->arrival_time,
                    "mot" => $entry->mode_of_transport,
                    "trans_exp" => $entry->transport_expenses,
                    "per_diem"=>$itenerary_id[0]->perdiem,
                    "others" =>$entry->others,
                    "total" => $entry->total,
                    "breakfast" => $itenerary_id[0]->is_breakfast_covered,
                    "lunch" => $itenerary_id[0]->is_lunch_covered,
                    "dinner" => $itenerary_id[0]->is_dinner_covered,
                    "lodging" => $itenerary_id[0]->is_lodging_covered,
                    'raw_diem'=>  $itenerary_id[0]->perdiem,
                    'raw_total'=> $itenerary_id[0]->perdiem,
                ));
            }
            }
        }
        $this->isPopulating=false;
    }
    

}
