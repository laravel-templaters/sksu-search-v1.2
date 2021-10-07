<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Itenerary extends Component
{
    public $gen;
    public $i = 1;
    public $date_from;
    public $date_to;
    public $diff;
    public $per_diem;


    public $showDays = false;

    public $input = [[
        "date" => "",
        "place" => "",
        "dep_time" => "",
        "arr_time" => "",
        "mot" => "",
        "trans_exp" => "",
        "per_diem" => "",
        "others" => "",
        "total" => "",
        "breakfast" => "",
        "lunch" => "",
        "dinner" => "",
        "lodging" => "",
 ],];

    public function mount($gen, $per_diem)
    {
        $this->gen = $gen;
        $this->per_diem = $per_diem;
       
    //     $this->input = [[
    //         "per_diem" => isset($this->per_diem) ? number_format($this->per_diem['amount'],2) : ""
    //  ],];
      
    }

    public function render()
    {
        return view('livewire.itenerary');
    }

    public function addmain($i){
        // dd($i);
        
        $i = $i + 1;
        $this->i = $i;
  
            array_push($this->input ,$i);
        
       
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
                // dd($this->gen);
              
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


}
