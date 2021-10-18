<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

// use App\Models\Itenerary;

class Itenerary extends Component
{
    public $gen;
    public $i = 1;
    public $date_from;
    public $date_to;
    public $diff;
    public $per_diem;
    public $temp_diem=array();
    public $final_diem;
    public $isSet_per_diem = false;


    public $showDays = false;
    public $isDisabled = 'enabled';
    
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
        ],
                    ];

    public function mount($gen, $per_diem)
    {
        $this->gen = $gen;
        $this->per_diem = $per_diem;


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
        
        return view('livewire.itenerary')->with(['isset_per_diem' => $this->isSet_per_diem]);
       
        
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
            "per_diem"=>number_format($this->temp_diem[0],2),
            "others" => "",
            "total" => "",
            "breakfast" => "",
            "lunch" => "",
            "dinner" => "",
            "lodging" => "",
            'raw_diem'=>  (string)$this->temp_diem[0],
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

   

 
    



    function createDateRangeArray($strDateFrom,$strDateTo)
    {
    // takes two dates formatted as YYYY-MM-DD and creates an
    // inclusive array of the dates between the from and to dates.

    // could test validity of dates here but I'm already doing
    // that in the main script
    
    $this->gen = [];

    $iDateFrom = strtotime($strDateFrom);
    $iDateTo = strtotime($strDateTo);
    // $iDateFrom = mktime(1, 0, 0, substr($strDateFrom, 5, 2), substr($strDateFrom, 8, 2), substr($strDateFrom, 0, 4));
    // $iDateTo = mktime(1, 0, 0, substr($strDateTo, 5, 2), substr($strDateTo, 8, 2), substr($strDateTo, 0, 4));

        array_push($this->gen, date('Y-m-d', $iDateFrom)); // first entry
        while ($iDateFrom<$iDateTo) {
            $iDateFrom += 86400; // add 24 hours
            array_push($this->gen, date('Y-m-d', $iDateFrom));
        }


    //   dd($this->gen);
    
    return $this->gen;
    }



    function ComputeDiem($key,$type){



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
                break;
            
           
        }
    }
    
    //test for saving
    public $listeners = [
        'storeItenerary'
    ];

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

    public function storeItenerary($trans_id)
    {

        // $validatedDate = $this->validate([
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

        foreach ($this->input as $key => $value) {
           //$dates = \Carbon\Carbon::createFromFormat('M. d',  $this->input[$key]['date'])->format('Y-m-d');
//dd( $this->input[$key]['date'] );
             DB::table('iteneraries')->insert(
                 array('is_breakfast_covered' => $this->input[$key]['breakfast'] == 1 ? '1' : '0', 
                        'is_lunch_covered' => $this->input[$key]['lunch'] == 1 ? '1' : '0', 
                        'is_dinner_covered' => $this->input[$key]['dinner'] == 1 ? '1' : '0', 
                        'is_lodging_covered' => $this->input[$key]['lodging'] == 1 ? '1' : '0', 
                        'date' =>'2001/01/01', 
                        'perdiem' => $this->input[$key]['per_diem'], 
                        'travel_order_id' => $trans_id));


                        return back();
                        
            //Contact::create(['name' => $this->name[$key], 'phone' => $this->phone[$key]]);
            // $itenerary = new App\Models\Itenerary;
            // $itenerary->is_breakfast_covered = $this->input[$key]['breakfast'] == 1 ? '1' : '0';
            // $itenerary->is_lunch_covered = $this->input[$key]['lunch'] == 1 ? '1' : '0';
            // $itenerary->is_dinner_covered = $this->input[$key]['dinner'] == 1 ? '1' : '0';
            // $itenerary->is_lodging_covered = $this->input[$key]['lodging'] == 1 ? '1' : '0';
            // $itenerary->date = $this->input[$key]['date'];
            // $itenerary->perdiem = $this->input[$key]['per_diem'];
            // $itenerary->travel_order_id = $trans_id;
            // $itenerary->save();
        }

    }
    

}
