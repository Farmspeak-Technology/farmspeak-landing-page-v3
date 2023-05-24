<?php

namespace App\Http\Livewire;

use App\Models\BroilerUpdate;
use App\Models\CockerelUpdate;
use App\Models\NoilerUpdate;
use App\Models\PulletUpdate;
use App\Models\TurkeyPoultsUpdate;
use Livewire\Component;

class PriceTodayComponent extends Component
{
    public $listeners = ['updateData'];

    // for soft relaod
    public function updateData()
    {
        
        // for boilers
        $broilerPrice = BroilerUpdate::latest()->limit(1)->get();
        $previousRow = BroilerUpdate::orderBy('id', 'desc')->skip(1)->first()->get();

        // for Pullets
        $pulletPrice = PulletUpdate::latest()->limit(1)->get();
        $previousPullet = PulletUpdate::orderBy('id', 'desc')->skip(1)->first()->get();
        
        //  for Cockerels
        $cockerelPrice = CockerelUpdate::latest()->limit(1)->get();
        $previousCockerel = CockerelUpdate::orderBy('id', 'desc')->skip(1)->first()->get();

        //  for Noilers
        $NoilerPrice = NoilerUpdate::latest()->limit(1)->get();
        $previousNoiler = NoilerUpdate::orderBy('id', 'desc')->skip(1)->first()->get();

        //  for Turkey Poults
        $TurkeyPrice = TurkeyPoultsUpdate::latest()->limit(1)->get();
        $previousTurkey = TurkeyPoultsUpdate::orderBy('id', 'desc')->skip(1)->first()->get();

    }

    public function render()
    {
        // for boilers
        $broilerPrice = BroilerUpdate::latest()->limit(1)->get();
        $previousRow = BroilerUpdate::orderBy('id', 'desc')->skip(1)->first()->get();

        // for Pullets
        $pulletPrice = PulletUpdate::latest()->limit(1)->get();
        $previousPullet = PulletUpdate::orderBy('id', 'desc')->skip(1)->first()->get();
        
        //  for Cockerels
        $cockerelPrice = CockerelUpdate::latest()->limit(1)->get();
        $previousCockerel = CockerelUpdate::orderBy('id', 'desc')->skip(1)->first()->get();

        //  for Noilers
        $noilerPrice = NoilerUpdate::latest()->limit(1)->get();
        $previousNoiler = NoilerUpdate::orderBy('id', 'desc')->skip(1)->first()->get();

        //  for Turkey Poults
        $turkeyPrice = TurkeyPoultsUpdate::latest()->limit(1)->get();
        $previousTurkey = TurkeyPoultsUpdate::orderBy('id', 'desc')->skip(1)->first()->get();
        
        return view('livewire.price-today-component',[
            'broilerPrices' => $broilerPrice,
            'yesterdayPrices' => $previousRow,
            'cockerelPrices' => $cockerelPrice,
            'yesterdayCockerelPrices' => $previousCockerel,
            'noilerPrices' => $noilerPrice,
            'yesterdayNoilerPrices' => $previousNoiler,
            'turkeyPrices' => $turkeyPrice,
            'yesterdayTurkeyPrices' => $previousTurkey,
            'pulletPrices' => $pulletPrice,
            'yesterdayPulletPrices' => $previousPullet,
        ]);
    }
}