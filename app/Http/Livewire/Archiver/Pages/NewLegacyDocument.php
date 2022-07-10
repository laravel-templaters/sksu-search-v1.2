<?php

namespace App\Http\Livewire\Archiver\Pages;

use App\Models\ArchiveFolder;
use App\Models\Building;
use Carbon\Carbon;
use App\Models\Drawer;
use App\Models\FolderDocument;
use App\Models\FundCluster;
use App\Models\LegacyDocument;
use App\Models\Shelf;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Hash;

class NewLegacyDocument extends Component
{
    use WithFileUploads;
    
    public $folder;
    public $drawer;
    public $shelf;
    public $building;

    public $name;
    public $path;
    public $date;
    // public $year;
    public $document_code;
    public $document_code_for_download;
    public $archived_year_id;
    public $buildings;
    public $particular;
    public $payee;    
    public $shelves;
    public $fundcluster;
    public $drawers;
    public $folders;
    public $building_id;
    public $old_building_id;
    public $shelf_id;
    public $old_shelf_id;
    public $drawer_id;
    public $old_drawer_id;
    public $folder_id;
    public $old_folder_id;
    public $legacy_added = false;
    public $copiedToClipboard = false;
    public $document;
    public $test_input;
    //mount
    // public function mount($folder, $drawer, $shelf, $building)
    // {
    //     $this->folder = $folder;
    //     $this->drawer = $drawer;
    //     $this->shelf = $shelf;
    //     $this->building = $building;
    // }

    public function updated($field)
    {
        if($field == 'fundcluster'){
            $getclustertype = FundCluster::where('id',$this->fundcluster)->get('fund_cluster_type');
            if($this->fundcluster == "0"){
             
                $this->document_code = "000-00-00-0000";
            }else{
               
                $this->document_code = $getclustertype[0]->fund_cluster_type."-00-00-0000";
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
        //if field is path 
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
    protected $messages = [
        'name.required' => 'Please enter a name for the document',
        'document_code.required' => 'Please enter a document code for the document',
        'path.required' => 'Please upload a file',
        'date.required' => 'Please select a date',
        'path.mimes' => 'Invalid file type. Only PDFs are allowed.',
        'building_id.required' => 'Please select a building',
        'shelf_id.required' => 'Please select a shelf',
        'drawer_id.required' => 'Please select a drawer',
        'folder_id.required' => 'Please select a folder',
    ];
    public function render()
    {      
        if($this->document_code == null || !isset($this->document_code)){
            // $lg = LegacyDocument::count();
            // $ad = FolderDocument::count();
            // $sum = $lg + $ad;
            // $this->document_code = "ARDC".date('omd-Gi-s').$sum;
            $this->document_code= "000-00-00-0000";
        }
        $this->buildings = Building::all();
        return view('livewire.archiver.pages.new-legacy-document',['fundclusters'=>FundCluster::all()]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'document_code' => 'required',
            'path' => 'required|mimes:pdf',
            'date' => 'required|date',
            'building_id' => 'required',
            'payee' => 'required',
            'particular' => 'required',
            'shelf_id' => 'required',
            'drawer_id' => 'required',
            'folder_id' => 'required',
        ]);
       
        // $url = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=".$this->document_code;
        // $contents = file_get_contents($url);
        // $path = Storage::put('qrcodes', file_get_contents($url));
        $url = "https://api.qrserver.com/v1/create-qr-code/?size=1080x1080&data=".$this->document_code;
        $contents = file_get_contents($url);
        $name = substr($url, strrpos($url, '/') + 1);
        $randomPath = Hash::make($this->document_code);
        Storage::put("/qrcodes/".$this->document_code.".png", $contents,['public']);
        $this->document = LegacyDocument::create([
            'name' => $this->name,
            'document_code' => $this->document_code,
            'path' => $this->path->store('documents'),
            'date' => $this->date,
            'payee_name'=>$this->payee,
            'particulars'=>$this->particular,
            'fund_cluster_id'=>$this->fundcluster,
            'building_id' => $this->building_id,
            'shelf_id' => $this->shelf_id,
            'drawer_id' => $this->drawer_id,
            'folder_id' => $this->folder_id, 
            'qr_path' =>"/qrcodes/".$this->document_code.".png",
        ]);
        
        $this->document_code_for_download = $this->document->qr_path;
        $this->legacy_added = true;
        $this->resetInput();
        //return Storage::download($this->document->qr_path);
    }

    public function resetInput()
    {
        $this->name = null;
        $this->document_code = $this->payee = null;
        $this->path = $this->particular = null;
        $this->date = null;
        $this->building_id = null;
        $this->shelf_id = null;
        $this->drawer_id = null;
        $this->folder_id = null;
        $this->fundcluster = 1;
    }
}
