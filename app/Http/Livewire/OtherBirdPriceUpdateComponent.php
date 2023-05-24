<?php

namespace App\Http\Livewire;

use App\Models\CockerelUpdate;
use App\Models\NoilerUpdate;
use App\Models\TurkeyPoultsUpdate;
use Livewire\Component;
use Illuminate\Validation\Rule;

class OtherBirdPriceUpdateComponent extends Component
{


    public $BLACK_COCKEREL;
    public $WHITE_COCKEREL;
    public $PLAIN;
    public $SASSO;
    public $DUAL;
    public $AMO;
    public $BRAHMA;    
    public $FOREIGN;
    public $LOCAL;
    public $passcode;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'BLACK_COCKEREL' => 'required',
            'WHITE_COCKEREL' => 'required',
            'PLAIN' => 'required',  
            'SASSO' => 'required',
            'DUAL' => 'required',
            'BRAHMA' => 'required',
            'FOREIGN' => 'required',
            'AMO' => 'required',
            'LOCAL' => 'required',
            'passcode' => ['required', Rule::in(['1090'])],

        ]);
    }

    // clear the input field after submission
    private function resetInputFields()
    {
        $this->BLACK_COCKEREL = '';
        $this->WHITE_COCKEREL = '';
        $this->PLAIN = '';
        $this->SASSO = '';
        $this->DUAL = '';
        $this->BRAHMA = '';
        $this->LOCAL = '';
        $this->AMO = '';
        $this->FOREIGN = '';
        $this->passcode = '';
    }

        public function storeBirdPrice()
    {   $this->validate([
            'BLACK_COCKEREL' => 'required',
            'WHITE_COCKEREL' => 'required',
            'PLAIN' => 'required',  
            'SASSO' => 'required',
            'DUAL' => 'required',
            'BRAHMA' => 'required',
            'FOREIGN' => 'required',
            'AMO' => 'required',
            'LOCAL' => 'required',
            'passcode' => ['required', Rule::in(['1090'])],
        ]); 

        $cockerelPrice = new CockerelUpdate();
        $cockerelPrice->BLACK_COCKEREL = $this->BLACK_COCKEREL;
        $cockerelPrice->WHITE_COCKEREL = $this->WHITE_COCKEREL;
        $cockerelPrice->save();

        $noilerPrice = new NoilerUpdate();
        $noilerPrice->PLAIN = $this->PLAIN;
        $noilerPrice->SASSO = $this->SASSO;
        $noilerPrice->DUAL = $this->DUAL;
        $noilerPrice->AMO = $this->AMO;
        $noilerPrice->save();

        $turkeyPoultsPrice = new TurkeyPoultsUpdate();
        $turkeyPoultsPrice->BRAHMA = $this->BRAHMA;
        $turkeyPoultsPrice->FOREIGN = $this->FOREIGN;
        $turkeyPoultsPrice->LOCAL = $this->LOCAL;
        $turkeyPoultsPrice->save();
        session()->flash('message', 'Price has been update successfully!');
        $this->resetInputFields();
    }
    public function render()
    {
        return view('livewire.other-bird-price-update-component');
    }
}