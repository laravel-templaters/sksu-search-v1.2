<?php

namespace App\Http\Livewire\Archiver\Pages;

use App\Models\FundCluster;
use Livewire\Component;

class ManageFundClusters extends Component
{
    public $fund_clusters;
    public $searchText;
    public $fund_cluster_name;
    //entangles
    public $fund_added=false;
    public $show_fund_form=false;

    public function updated($field){
        if ($field == 'searchText') {
            $this->fund_clusters = FundCluster::search('fund_cluster_type',$this->searchText )->orderBy('id','desc')->get();
        }
        $this->validateOnly($field, [
            'fund_cluster_name' => 'required|string|max:255',
        ]);
    }


    public function render()
    {
        if (empty($this->fund_clusters)) {
            $this->fund_clusters = FundCluster::orderBy('id','desc')->get();
        }
        return view('livewire.archiver.pages.manage-fund-clusters',['fundClusters' => $this->fund_clusters])->layout('layouts.accountant');
    }
    public function showfundform(){
        $this->show_fund_form=true;
    }
    public function store(){
        $this->validate([
            'fund_cluster_name' => 'required|string|max:255',
        ]);
        $building = FundCluster::create([
            'fund_cluster_type' => $this->fund_cluster_name,
        ]);
        $this->hidefundform();
        $this->fund_added = true;
        $this->resetInput();
    }
    public function resetInput(){
        $this->fund_cluster_name = null;
        $this->searchText ="a";
        $this->searchText ="";
        $this->fund_clusters = FundCluster::orderBy('id','desc')->get();
    }


    public function hidefundform(){
        $this->resetInput();
        $this->show_fund_form = false;
    }


    protected $messages=[
        'fund_cluster_name.required'=>'Please enter a cluster name',
    ];
}
