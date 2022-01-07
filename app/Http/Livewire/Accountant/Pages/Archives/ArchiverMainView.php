<?php

namespace App\Http\Livewire\Accountant\Pages\Archives;

use App\Models\ArchiveFolder;
use App\Models\DisbursementVoucher;
use Livewire\Component;

class ArchiverMainView extends Component
{
    public $searchText;
    public $dateFilter;
    
    public function render()
    {   $disbursement_vouchers = [];
        if (isset($dateFilter)) {
          if ($dateFilter =='none') {
            $disbursement_vouchers = DisbursementVoucher::search('dv_tracking_number',$this->searchText)->paginate(5);
          }else{
              $tempdate = explode('-',$dateFilter);
              if ($tempdate[1]=='d') {
                  switch ($tempdate[0]) {
                    case '7':
                        $disbursement_vouchers = DisbursementVoucher::search('dv_tracking_number',$this->searchText)->search7days('closed_date',"")->paginate(5);
                          break;
                    case '15':
                        $disbursement_vouchers = DisbursementVoucher::search('dv_tracking_number',$this->searchText)->search15days('closed_date',"")->paginate(5);
                          break;
                    case '30':
                        $disbursement_vouchers = DisbursementVoucher::search('dv_tracking_number',$this->searchText)->search30days('closed_date',"")->paginate(5);
                        break;
                      default:
                         
                          break;
                  }
              }else if ($tempdate[1]=='m') {
                switch ($tempdate[0]) {
                    case '3':
                        $disbursement_vouchers = DisbursementVoucher::search('dv_tracking_number',$this->searchText)->search3months('closed_date',"")->paginate(5);
                          break;
                    case '6':
                        $disbursement_vouchers = DisbursementVoucher::search('dv_tracking_number',$this->searchText)->search6months('closed_date',"")->paginate(5);
                          break;
                    case '12':
                        $disbursement_vouchers = DisbursementVoucher::search('dv_tracking_number',$this->searchText)->search12months('closed_date',"")->paginate(5);
                        break;
                      default:
                        break;
                  }
              }
          } 
        }else{
            $disbursement_vouchers = DisbursementVoucher::search('dv_tracking_number',$this->searchText)->paginate(5);
        }
       
        return view('livewire.accountant.pages.archives.archiver-main-view')->with('disbursement_vouchers',$disbursement_vouchers)->layout('layouts.accountant');
    }
}