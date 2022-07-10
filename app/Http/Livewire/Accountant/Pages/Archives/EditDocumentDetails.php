<?php

namespace App\Http\Livewire\Accountant\Pages\Archives;

use App\Models\FolderDocument;
use App\Models\LegacyDocument;
use App\Models\Building;
use App\Models\Drawer;
use App\Models\Shelf;
use App\Models\ArchiveFolder;
use Livewire\Component;
use App\Models\FundCluster;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class EditDocumentDetails extends Component
{
    public $disbursement_id;
    public $legacy_id;
    public $islegacy;
    public $document_code;
    public $fundcluster;
    public $edit_fc = false;
    public $edit_lc = false;
    public $payee;
    public $particular;
    public $date;
    public $document;
    public $buildings;
    public $building_id;
    public $old_building_id;
    public $shelves;
    public $shelf_id;
    public $old_shelf_id;
    public $drawers;
    public $drawer_id;
    public $old_drawer_id;
    public $folders;
    public $folder_id;
    public $old_folder_id;
    public $name;
    public $path;
    public $code;
    public $isValidCode = false;
    public $isValid = false;
    public function updated($field)
    {
        if($field == 'fundcluster'){
            if($this->fundcluster != "0")
            {
                $getclustertype = FundCluster::where('id',$this->fundcluster)->get('fund_cluster_type');
                $this->document_code = $getclustertype[0]->fund_cluster_type."-00-00-0000";
            }else{
                $this->document_code = "000-00-00-0000";
            }   
        }

        $this->validateOnly($field, [
            'name' => 'required',
            'document_code' => 'required',
            'path' => 'required|mimes:pdf',
            'date' => 'required',
            'payee' => 'required',
            'particular' => 'required',
            'building_id' => 'required',
            'shelf_id' => 'required',
            'drawer_id' => 'required',
            'folder_id' => 'required',
        ]);

        if($field == 'path'){
            $this->name =substr($this->path->getClientOriginalName(), 0, Str::length($this->path->getClientOriginalName())-4);
            $this->name =str_replace('_', ' ', $this->name);
        }

        //if field is building_id, then update the shelves
        if($field == 'building_id'){
            //if buiding id is not null, then update the shelves else set shelves, drawers, folders to null
            if($this->building_id != null){
               if($this->old_building_id != null){

                    if($this->old_building_id != $this->building_id){
                        $this->shelves = Shelf::where('building_id', $this->building_id)->get();
                        $this->drawers = null;
                        $this->folders = null;
                        $this->old_building_id = $this->building_id;               
                    }
                    
               }else{
                    $this->shelves = Shelf::where('building_id', $this->building_id)->get();
                    $this->old_building_id = $this->building_id;
               }
            }else{
                $this->shelves = null;
                $this->drawers = null;
                $this->folders = null;
            }
        }
         //if field is shelf_id, then update the drawers
         if($field == 'shelf_id'){
            //if shelf id is not null, then update the drawers else set drawers, folders to null
            if($this->shelf_id != null){
                if($this->old_shelf_id != null){

                    if($this->old_shelf_id != $this->shelf_id){
                        $this->drawers = Drawer::where('shelf_id', $this->shelf_id)->get();
                        $this->folders = null;
                        $this->old_shelf_id = $this->shelf_id;               
                    }
                    
               }else{
                    $this->drawers = Drawer::where('shelf_id', $this->shelf_id)->get();
                    $this->old_shelf_id = $this->shelf_id;
               }                
            }else{
                $this->drawers = null;
                $this->folders = null;
            }
        }
        //if field is drawer_id, then update the folders
        if($field == 'drawer_id'){
            //if drawer id is not null, then update the folders else set folders to null
            if($this->drawer_id != null){
                $this->folders = ArchiveFolder::where('drawer_id', $this->drawer_id)->get();
            }else{
                $this->folders = null;
            }
        }
    }

    public function render()
    {
        if($this->islegacy == 1){
           // $this->document = LegacyDocument::where('id',$this->legacy_id)->with('folder')->with('drawer')->with('shelf')->with('building')->with('fund_cluster')->first();
            // if($this->edit_fc == false)
            // {  
            //     $this->fundcluster = $document->fund_cluster_id;
            //     $this->document_code = $document->document_code;
                
            // }else{
            //     $this->fundcluster = "0";
            //     $this->document_code = "000-00-00-0000";
            // }
           
        }else{
            $document = FolderDocument::find($this->disbursement_id)->with('folder')->with('drawer')->with('shelf')->with('building')->first();
        }
        if($this->document_code == null || !isset($this->document_code)){
            $this->document_code= "000-0-0000";
        }
        $this->buildings = Building::all();
            return view('livewire.accountant.pages.archives.edit-document-details',['fundclusters'=>FundCluster::all()])->layout('layouts.accountant')->with(['document',$this->document]);
        // return view('livewire.accountant.pages.archives.edit-document-details');
       
    }
    public function mount($id, $islegacy)
    {
        if($islegacy==1){
            $this->legacy_id = $id;
            $this->disbursement_id = null;

            $this->document = LegacyDocument::where('id',$this->legacy_id)->with('folder')->with('drawer')->with('shelf')->with('building')->with('fund_cluster')->first();

            if($this->edit_fc == false)
            {  
                $this->fundcluster = $this->document->fund_cluster_id;
                $this->document_code = $this->document->document_code;
            }else{
                $this->fundcluster = "0";
                $this->document_code = "000-00-00-0000";
            }
            $this->payee = $this->document->payee_name;
            $this->particular = $this->document->particulars;
            $this->date = $this->document->date;
            // $this->path = $this->document->path;
            
            //$this->path = Storage::get('storage/' . $this->document->path);

            if($this->edit_lc ==false)
            {
                $this->building_id = $this->document->building_id;
                $this->shelves = Shelf::where('building_id', $this->building_id)->get();
                $this->shelf_id = $this->document->shelf_id;
                $this->drawers = Drawer::where('shelf_id', $this->shelf_id)->get();
                $this->drawer_id = $this->document->drawer_id;
                $this->folders = ArchiveFolder::where('drawer_id', $this->drawer_id)->get();
                $this->folder_id = $this->document->folder_id;
            }else{
                $this->building_id = "0";
                $this->shelves = null;
                $this->shelf_id = null;
                $this->drawers = null;
                $this->drawer_id = null;
                $this->folders = null;
                $this->folder_id = null;
            }
           

            $this->isValidCode = false;
        }else{
            $this->disbursement_id = $id;
            $this->legacy_id = null;
        }
        $this->islegacy = $islegacy;
    }

    public function changeFund()
    {
        if($this->edit_fc == false)
        {  
            $this->fundcluster = $this->document->fund_cluster_id;
            $this->document_code = $this->document->document_code;
            
        }else{
            $this->fundcluster = "0";
            $this->document_code = "000-00-00-0000";
        }
    }

    public function changeLoc()
    {
        if($this->edit_lc ==false)
        {
            $this->building_id = $this->document->building_id;
            $this->shelves = Shelf::where('building_id', $this->building_id)->get();
            $this->shelf_id = $this->document->shelf_id;
            $this->drawers = Drawer::where('shelf_id', $this->shelf_id)->get();
            $this->drawer_id = $this->document->drawer_id;
            $this->folders = ArchiveFolder::where('drawer_id', $this->drawer_id)->get();
            $this->folder_id = $this->document->folder_id;
        }else{
            $this->building_id = "0";
            $this->shelves = null;
            $this->shelf_id = null;
            $this->drawers = null;
            $this->drawer_id = null;
            $this->folders = null;
            $this->folder_id = null;
        }
    }

    public function updateDocument()
    {
        $this->validate([
            'document_code' => 'required',
            'payee' => 'required',
            'particular' => 'required',
            'date' => 'required|date',
            'building_id' => 'required',
            'shelf_id' => 'required',
            'drawer_id' => 'required',
            'folder_id' => 'required',
        ]);
        if($this->islegacy == 1){
            $document = LegacyDocument::find($this->legacy_id);
            $document->document_code = $this->document_code;
            $document->payee_name = $this->payee;
            $document->particulars = $this->particular;
            $document->date = $this->date;
            $document->building_id = $this->building_id;
            $document->shelf_id = $this->shelf_id;
            $document->drawer_id = $this->drawer_id;
            $document->folder_id = $this->folder_id;
            $document->fund_cluster_id = $this->fundcluster;
            $document->save();
            //redirect to the previous page
            return redirect()->route('archiver-main');
        }
    }

    public function showValidate()
    {
        $this->code = null;
        $this->isValidCode = true;
        
    }

    public function validateCode()
    {
        if($this->code != null || !isset($this->code)){
            if($this->code = '12345')
            {
            
              $this->isValidCode = false;
              $this->isValid = true;
            }
        }
        
    }

    public function closeModal()
    {
        $this->isValid = false;
    }
}
