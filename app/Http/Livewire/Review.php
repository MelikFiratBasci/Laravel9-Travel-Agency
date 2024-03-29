<?php

namespace App\Http\Livewire;

use App\Models\Package;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record, $subject, $review, $package_id, $rate;


    public function mount($id){
        $this->record=Package::findOrFail($id);
        $this->package_id = $this->record->id;
    }
    public function render()
    {
        return view('livewire.review');
    }
    public function resetInput(){
        $this->subject=null;
        $this->review=null;
        $this->rate=null;
        $this->package_id=null;
        $this->IP=null;

    }
    public function store(){
        $this->validate([
            'subject'=>'required|min:5',
            'review'=> 'required|min10',
            'rate'=>'required'
        ]);
        \App\Models\Review::create([
            'package_id'=>$this->package_id,
            'user_id'=>Auth::id(),
            'IP'=>$_SERVER['REMOTE_ADDR'],
            'rate'=>$this->rate,
            'subject'=>$this->subject,
            'review'=>$this->review
        ]);
        session()->flash('message','Review send successfuly.');
        $this->resetInput();
    }
}
