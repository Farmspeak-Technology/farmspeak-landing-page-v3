<?php

namespace App\Http\Livewire;

use App\Models\PulletUpdate;
use Livewire\Component;
use Illuminate\Validation\Rule;

class PulletsUpdateComponent extends Component
{

    public $AGRITED;
    public $CHI;
    public $ZARTECH;
    public $SUPREME;
    public $FIDAN;
    public $CROWN;
    public $AMO;
    public $BLACK_PULLET;    
    public $FARM_SUPPORT;
    public $STANDARD;
    public $passcode;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'AGRITED' => 'required',
            'CHI' => 'required',
            'ZARTECH' => 'required',  
            'SUPREME' => 'required',
            'CROWN' => 'required',
            'FIDAN' => 'required',
            'BLACK_PULLET' => 'required',
            'AMO' => 'required',
            'FARM_SUPPORT' => 'required',
            'STANDARD' => 'required',
            'passcode' => ['required', Rule::in(['1090'])],

        ]);
    }

    // clear the input field after submission
    private function resetInputFields()
    {
        $this->AGRITED = '';
        $this->CHI = '';
        $this->ZARTECH = '';
        $this->SUPREME = '';
        $this->CROWN = '';
        $this->FIDAN = '';
        $this->BLACK_PULLET = '';
        $this->AMO = '';
        $this->FARM_SUPPORT = '';
        $this->STANDARD = '';
        $this->passcode = '';
    }

        public function storePulletPrice()
    {   $this->validate([
            'AGRITED' => 'required',
            'CHI' => 'required',
            'ZARTECH' => 'required',  
            'SUPREME' => 'required',
            'CROWN' => 'required',
            'FIDAN' => 'required',
            'BLACK_PULLET' => 'required',
            'AMO' => 'required',
            'FARM_SUPPORT' => 'required',
            'STANDARD' => 'required',
            'passcode' => ['required', Rule::in(['1090'])],
        ]); 

        $pulletPrice = new PulletUpdate();
        $pulletPrice->AGRITED = $this->AGRITED;
        $pulletPrice->CHI = $this->CHI;
        $pulletPrice->ZARTECH = $this->ZARTECH;
        $pulletPrice->SUPREME = $this->SUPREME;
        $pulletPrice->CROWN = $this->CROWN;
        $pulletPrice->FIDAN = $this->FIDAN;
        $pulletPrice->BLACK_PULLET = $this->BLACK_PULLET;
        $pulletPrice->AMO = $this->AMO;
        $pulletPrice->FARM_SUPPORT = $this->FARM_SUPPORT;
        $pulletPrice->STANDARD = $this->STANDARD;
        $pulletPrice->save();
        $this->resetInputFields();
        return redirect()->route('bird-price');
    }

    public function render()
    {
        return view('livewire.pullets-update-component');
    }
}