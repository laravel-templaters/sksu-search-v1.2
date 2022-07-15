<?php

namespace App\Http\Livewire\Accountant\Pages\Archives;

use App\Models\FolderDocument;
use App\Models\LegacyDocument;
use Livewire\Component; 
use Notification;
use App\Notifications\SendUpdateDeleteCode;

class DeleteDocumentDetais extends Component
{
    public $disbursement_id;
    public $legacy_id;
    public $islegacy;
    public $code1;
    public $code2;
    public $code3;
    public $code4;
    public $code5;
    public $isValidCode = false;
    public $isValid = false;
    public $isNotValid = false;
    public $codeSent = false;
    public $randomCode;


    public function render()
    {
        if($this->islegacy == 1){
            $document = LegacyDocument::where('id',$this->legacy_id)->with('folder')->with('drawer')->with('shelf')->with('building')->with('fund_cluster')->first();
            
        }else{
            $document = FolderDocument::find($this->disbursement_id)->with('folder')->with('drawer')->with('shelf')->with('building')->first();
        }
        return view('livewire.accountant.pages.archives.delete-document-detais')->layout('layouts.accountant')->with('document',$document);
    }
    public function mount($id, $islegacy)
    {
    
        if($islegacy==1){
            $this->legacy_id = $id;
            $this->disbursement_id = null;
        }else{
            $this->disbursement_id = $id;
            $this->legacy_id = null;
        }
        $this->islegacy = $islegacy;
    }
    public function deleteDocument()
    {
        //show alert before deleting

        if($this->islegacy == 1){
            $document = LegacyDocument::find($this->legacy_id);
            $document->delete();
        }else{
            $document = FolderDocument::find($this->disbursement_id);
            $document->delete();
        }
        return redirect()->route('archiver-main');
    }

    public function showValidate()
    {
        $this->code = null;
        $this->isValidCode = true;
        
    }

    public function validateCode()
    {
        $this->code = $this->code1.$this->code2.$this->code3.$this->code4.$this->code5;
        if($this->code != null || isset($this->code)){
            if($this->code == $this->randomCode)
            {
              $this->isValidCode = false;
              $this->isNotValid = false;
              $this->isValid = true;
              
            }else{
                $this->isNotValid = true;
            }
        }
        
    }

    public function sendEmailNotification()
    {
        $this->randomCode =  rand(10000,99999);
        $this->codeSent = true;
        //dd( $this->randomCode);
        $email = 'smurfgab66@gmail.com';
        $data = [
            'code' => $this->randomCode,
        ];
        // Notification::send($email, new SendUpdateDeleteCode($data));
        Notification::route('mail', $email)->notify(new SendUpdateDeleteCode($data));
        

    }

    public function closeModal()
    {
        $this->isValid = false;
    }

    public function reloadPage()
    {
        return redirect()->route('archiver-main');
    }
}
