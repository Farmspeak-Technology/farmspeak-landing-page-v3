<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BroilerUpdate;
use Illuminate\Validation\Rule;

class BoilerUpdateComponent extends Component
{
    public $AGRITED;
    public $CHI;
    public $ZARTECH;
    public $SUPREME;
    public $CASCADA;
    public $FIDAN;
    public $FUNTES;
    public $VERTEX;
    public $GS;
    public $AMO;
    public $SAYED;
    public $VALENTINE;
    public $FARM_SUPPORT;
    public $STANDARD;
    public $DOY;
    public $PLAIN;
    public $NUBREED;
    public $AJILA;
    public $passcode;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'AGRITED' => 'required',
            'CHI' => 'required',
            'ZARTECH' => 'required',  
            'SUPREME' => 'required',
            'CASCADA' => 'required',
            'FIDAN' => 'required',
            'FUNTES' => 'required',
            'VERTEX' => 'required',
            'GS' => 'required',
            'AMO' => 'required',
            'SAYED' => 'required',
            'VALENTINE' => 'required',
            'FARM_SUPPORT' => 'required',
            'STANDARD' => 'required',
            'DOY' => 'required',
            'PLAIN' => 'required',
            'NUBREED' => 'required',
            'AJILA' => 'required',
            'passcode' => ['required', Rule::in(['1090x'])],

        ]);
    }

    // clear the input field after submission
    private function resetInputFields()
    {
        $this->AGRITED = '';
        $this->CHI = '';
        $this->ZARTECH = '';
        $this->SUPREME = '';
        $this->CASCADA = '';
        $this->FIDAN = '';
        $this->FUNTES = '';
        $this->VERTEX = '';
        $this->GS = '';
        $this->AMO = '';
        $this->SAYED = '';
        $this->VALENTINE = '';
        $this->FARM_SUPPORT = '';
        $this->STANDARD = '';
        $this->DOY = '';
        $this->PLAIN = '';
        $this->NUBREED = '';
        $this->AJILA = '';
        $this->passcode = '';
    }

        public function storeBroilerPrice()
    {   $this->validate([
            'AGRITED' => 'required',
            'CHI' => 'required',
            'ZARTECH' => 'required',  
            'SUPREME' => 'required',
            'CASCADA' => 'required',
            'FIDAN' => 'required',
            'FUNTES' => 'required',
            'VERTEX' => 'required',
            'GS' => 'required',
            'AMO' => 'required',
            'SAYED' => 'required',
            'VALENTINE' => 'required',
            'FARM_SUPPORT' => 'required',
            'STANDARD' => 'required',
            'DOY' => 'required',
            'PLAIN' => 'required',
            'NUBREED' => 'required',
            'AJILA' => 'required',
        ]); 

        $broilerPrice = new BroilerUpdate();
        $broilerPrice->AGRITED = $this->AGRITED;
        $broilerPrice->CHI = $this->CHI;
        $broilerPrice->ZARTECH = $this->ZARTECH;
        $broilerPrice->SUPREME = $this->SUPREME;
        $broilerPrice->CASCADA = $this->CASCADA;
        $broilerPrice->FIDAN = $this->FIDAN;
        $broilerPrice->FUNTES = $this->FUNTES;
        $broilerPrice->VERTEX = $this->VERTEX;
        $broilerPrice->GS = $this->GS;
        $broilerPrice->AMO = $this->AMO;
        $broilerPrice->SAYED = $this->SAYED;
        $broilerPrice->VALENTINE = $this->VALENTINE;
        $broilerPrice->FARM_SUPPORT = $this->FARM_SUPPORT;
        $broilerPrice->STANDARD = $this->STANDARD;
        $broilerPrice->DOY = $this->DOY;
        $broilerPrice->PLAIN = $this->PLAIN;
        $broilerPrice->NUBREED = $this->NUBREED;
        $broilerPrice->AJILA = $this->AJILA;
        $broilerPrice->save();
        $this->resetInputFields();
        
        // Redirect after saving
        return redirect()->route('pullet-price');
    }
    
    public function render()
    {
        return view('livewire.boiler-update-component');
    }
}