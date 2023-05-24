<div wire:poll.120s="updateData">
<x-navBar/>

<section>
    <div class="container max-w-6xl mx-auto pt-28 md:px-0  md:pt-36">
        <div class="flex flex-col space-y-6">
            @foreach ($broilerPrices as $broilerPrice)
            <h2 class="text-xl text-[#606060] mx-auto font-bold pb-5"> BROILERS (BX) Price Update for  {{ $broilerPrice->created_at->format('d/m/Y')}} </h2>
            @endforeach
            <div class="flex flex-wrap items-center gap-5 justify-center  md:p-0 md:flex-row md:space-x-6 text-center">
                @foreach ($broilerPrices as $broilerPrice)
                

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">AGRITED</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->AGRITED }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->AGRITED > $broilerPrice->AGRITED)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->AGRITED < $broilerPrice->AGRITED)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">CHI</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->CHI }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->CHI > $broilerPrice->CHI)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->CHI < $broilerPrice->CHI)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">ZARTECH</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->ZARTECH }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->ZARTECH > $broilerPrice->ZARTECH)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->ZARTECH < $broilerPrice->ZARTECH)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">SUPREME</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->SUPREME }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->SUPREME > $broilerPrice->SUPREME)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->SUPREME < $broilerPrice->SUPREME)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">NUBREED</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->NUBREED }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->NUBREED > $broilerPrice->NUBREED)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->NUBREED < $broilerPrice->NUBREED)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">CASCADA</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->CASCADA }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->CASCADA > $broilerPrice->CASCADA)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->CASCADA < $broilerPrice->CASCADA)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">FIDAN</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->FIDAN }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->FIDAN > $broilerPrice->FIDAN)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->FIDAN < $broilerPrice->FIDAN)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">FUNTES</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->FUNTES }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->FUNTES > $broilerPrice->FUNTES)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->FUNTES < $broilerPrice->FUNTES)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">VERTEX</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->VERTEX }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->VERTEX > $broilerPrice->VERTEX)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->VERTEX < $broilerPrice->VERTEX)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-6 md:px-10 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">Gold Smile</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->GS }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->GS > $broilerPrice->GS)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->GS < $broilerPrice->GS)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">AMO</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->AMO }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->AMO > $broilerPrice->AMO)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->AMO < $broilerPrice->AMO)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">SAYED</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->SAYED }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->SAYED > $broilerPrice->SAYED)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->SAYED < $broilerPrice->SAYED)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-6 md:px-11 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">VALENTINE</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->VALENTINE }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->VALENTINE > $broilerPrice->VALENTINE)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->VALENTINE < $broilerPrice->VALENTINE)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-5 md:px-14 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold max-w-[10px]">FARM SUPPORT</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->FARM_SUPPORT}}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                         @if ($yesterdayPrice->FARM_SUPPORT > $broilerPrice->FARM_SUPPORT)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->FARM_SUPPORT < $broilerPrice->FARM_SUPPORT)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-8 md:px-14 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">AJILA</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->AJILA }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->AJILA > $broilerPrice->AJILA)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->AJILA < $broilerPrice->AJILA)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">STANDARD</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->STANDARD }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->STANDARD > $broilerPrice->STANDARD)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->STANDARD < $broilerPrice->STANDARD)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold ">DOY SUPER</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->DOY }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->DOY > $broilerPrice->DOY)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->DOY < $broilerPrice->DOY)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-8 md:px-14 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">PLAIN</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $broilerPrice->PLAIN }}</p>
                        @foreach ($yesterdayPrices as $yesterdayPrice)
                        @if ($yesterdayPrice->PLAIN > $broilerPrice->PLAIN)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPrice->PLAIN < $broilerPrice->PLAIN)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
            </div>


        </div>
    </div>
</section>
<section>
    <div class="container max-w-6xl mx-auto pt-20">
        <div class="flex flex-col space-y-6">
            @foreach ($pulletPrices as $pulletPrice)
            <h2 class="text-xl text-[#606060] mx-auto font-bold pb-5"> PULLETS (PX) Price Update for &nbsp; {{ $pulletPrice->created_at->format('d/m/Y')}} </h2>
            @endforeach
            <div class="flex flex-wrap items-center gap-5 justify-center  md:p-0 md:flex-row md:space-x-6 text-center">
                @foreach ($pulletPrices as $pulletPrice)
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">AGRITED</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $pulletPrice->AGRITED }}</p>
                        @foreach ($yesterdayPulletPrices as $yesterdayPulletPrice)
                        @if ($yesterdayPulletPrice->AGRITED > $pulletPrice->AGRITED)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPulletPrice->AGRITED < $pulletPrice->AGRITED)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">CHI</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $pulletPrice->CHI }}</p>
                        @foreach ($yesterdayPulletPrices as $yesterdayPulletPrice)
                        @if ($yesterdayPulletPrice->CHI > $pulletPrice->CHI)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPulletPrice->CHI < $pulletPrice->CHI)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">ZARTECH</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $pulletPrice->ZARTECH }}</p>
                        @foreach ($yesterdayPulletPrices as $yesterdayPulletPrice)
                        @if ($yesterdayPulletPrice->ZARTECH > $pulletPrice->ZARTECH)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPulletPrice->ZARTECH < $pulletPrice->ZARTECH)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">SUPREME</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $pulletPrice->SUPREME }}</p>
                        @foreach ($yesterdayPulletPrices as $yesterdayPulletPrice)
                        @if ($yesterdayPulletPrice->SUPREME > $pulletPrice->SUPREME)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPulletPrice->SUPREME < $pulletPrice->SUPREME)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">CROWN</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $pulletPrice->CROWN }}</p>
                        @foreach ($yesterdayPulletPrices as $yesterdayPulletPrice)
                        @if ($yesterdayPulletPrice->CROWN > $pulletPrice->CROWN)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPulletPrice->CROWN < $pulletPrice->CROWN)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">STANDARD</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $pulletPrice->STANDARD }}</p>
                        @foreach ($yesterdayPulletPrices as $yesterdayPulletPrice)
                        @if ($yesterdayPulletPrice->STANDARD > $pulletPrice->STANDARD)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPulletPrice->STANDARD < $pulletPrice->STANDARD)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">AMO</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $pulletPrice->AMO }}</p>
                        @foreach ($yesterdayPulletPrices as $yesterdayPulletPrice)
                        @if ($yesterdayPulletPrice->AMO > $pulletPrice->AMO)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPulletPrice->AMO < $pulletPrice->AMO)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-5 md:px-14 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold max-w-[10px]">FARM SUPPORT</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $pulletPrice->FARM_SUPPORT }}</p>
                        @foreach ($yesterdayPulletPrices as $yesterdayPulletPrice)
                        @if ($yesterdayPulletPrice->FARM_SUPPORT > $pulletPrice->FARM_SUPPORT)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPulletPrice->FARM_SUPPORT < $pulletPrice->FARM_SUPPORT)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-5 md:px-14 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold max-w-[10px]">BLACK PULLET</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $pulletPrice->BLACK_PULLET }}</p>
                        @foreach ($yesterdayPulletPrices as $yesterdayPulletPrice)
                        @if ($yesterdayPulletPrice->BLACK_PULLET > $pulletPrice->BLACK_PULLET)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayPulletPrice->BLACK_PULLET < $pulletPrice->BLACK_PULLET)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                
                @endforeach
            </div>


        </div>
    </div>
</section>


<section>
    <div class="container max-w-6xl mx-auto pt-20">
        <div class="flex flex-col space-y-6">
            @foreach ($cockerelPrices as $cockerelPrice)
            <h2 class="text-xl text-[#606060] mx-auto font-bold pb-5"> COCKEREL (CX) Price Update for &nbsp; {{ $cockerelPrice->created_at->format('d/m/Y')}} </h2>
            @endforeach
            <div class="flex flex-wrap items-center gap-5 justify-center  md:p-0 md:flex-row md:space-x-6 text-center">
                @foreach ($cockerelPrices as $cockerelPrice)
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-5 md:px-14 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold max-w-[10px]">WHITE COCKEREL</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $cockerelPrice->WHITE_COCKEREL }}</p>
                        @foreach ($yesterdayCockerelPrices as $yesterdayCockerelPrice)
                        @if ($yesterdayCockerelPrice->WHITE_COCKEREL > $cockerelPrice->WHITE_COCKEREL)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayCockerelPrice->WHITE_COCKEREL < $cockerelPrice->WHITE_COCKEREL)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-5 md:px-14 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold max-w-[10px]">BLACK COCKEREL</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $cockerelPrice->BLACK_COCKEREL }}</p>
                        @foreach ($yesterdayCockerelPrices as $yesterdayCockerelPrice)
                        @if ($yesterdayCockerelPrice->BLACK_COCKEREL > $cockerelPrice->BLACK_COCKEREL)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayCockerelPrice->BLACK_COCKEREL < $cockerelPrice->BLACK_COCKEREL)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                @endforeach

            </div>


        </div>
    </div>
</section>

<section>
    <div class="container max-w-6xl mx-auto pt-20">
        <div class="flex flex-col space-y-6">
            @foreach ($noilerPrices as $noilerPrice)
            <h2 class="text-xl text-[#606060] mx-auto font-bold pb-5"> NOILER (NX) Price Update for &nbsp; {{ $noilerPrice->created_at->format('d/m/Y')}} </h2>
            @endforeach
            <div class="flex flex-wrap items-center gap-5 justify-center  md:p-0 md:flex-row md:space-x-6 text-center">
                @foreach ($noilerPrices as $noilerPrice)

                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">AMO</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $noilerPrice->AMO }}</p>
                        @foreach ($yesterdayNoilerPrices as $yesterdayNoilerPrice)
                        @if ($yesterdayNoilerPrice->AMO > $noilerPrice->AMO)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayNoilerPrice->AMO < $noilerPrice->AMO)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">PLAIN</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $noilerPrice->PLAIN }}</p>
                        @foreach ($yesterdayNoilerPrices as $yesterdayNoilerPrice)
                        @if ($yesterdayNoilerPrice->PLAIN > $noilerPrice->PLAIN)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayNoilerPrice->PLAIN < $noilerPrice->PLAIN)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">DUAL</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $noilerPrice->DUAL }}</p>
                        @foreach ($yesterdayNoilerPrices as $yesterdayNoilerPrice)
                        @if ($yesterdayNoilerPrice->DUAL > $noilerPrice->DUAL)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayNoilerPrice->DUAL < $noilerPrice->DUAL)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">SASS0</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $noilerPrice->SASS0 }}</p>
                        @foreach ($yesterdayNoilerPrices as $yesterdayNoilerPrice)
                        @if ($yesterdayNoilerPrice->SASS0 > $noilerPrice->SASS0)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayNoilerPrice->SASS0 < $noilerPrice->SASS0)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>

                @endforeach
                
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container max-w-6xl mx-auto py-20">
        <div class="flex flex-col space-y-6">
            @foreach ($turkeyPrices as $turkeyPrice)
            <h2 class="text-xl text-[#606060] mx-auto font-bold pb-5"> TURKEY POULTS Price Update for &nbsp; {{ $turkeyPrice->created_at->format('d/m/Y')}} </h2>
            @endforeach
            <div class="flex flex-wrap items-center gap-5 justify-center  md:p-0 md:flex-row md:space-x-6 text-center">
                @foreach ($turkeyPrices as $turkeyPrice)
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">LOCAL</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $turkeyPrice->LOCAL }}</p>
                        @foreach ($yesterdayTurkeyPrices as $yesterdayTurkeyPrice)
                        @if ($yesterdayTurkeyPrice->LOCAL > $turkeyPrice->LOCAL)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayTurkeyPrice->LOCAL < $turkeyPrice->LOCAL)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">FOREIGN</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $turkeyPrice->FOREIGN }}</p>
                        @foreach ($yesterdayTurkeyPrices as $yesterdayTurkeyPrice)
                        @if ($yesterdayTurkeyPrice->FOREIGN > $turkeyPrice->FOREIGN)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayTurkeyPrice->FOREIGN < $turkeyPrice->FOREIGN)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col border-[0.5px] border-DeepGreen p-7 md:px-12 rounded-lg">
                    <img src="{{ asset('assets/img/icon-logo.svg') }}" alt="">
                    <h3 class="text-[#606060] text-lg font-semibold">BRAHMA</h3>

                    <div class="flex flex-row items-center md:items-start space-x-3">
                        <p class="text-[#606060] md:max-w-sm text-xl font-bold"> &#x20A6;{{ $turkeyPrice->BRAHMA }}</p>
                        @foreach ($yesterdayTurkeyPrices as $yesterdayTurkeyPrice)
                        @if ($yesterdayTurkeyPrice->BRAHMA > $turkeyPrice->BRAHMA)
                          <i class="mdi mdi-arrow-down text-lg  text-lightGreen"></i>
                        @endif
                        @if ($yesterdayTurkeyPrice->BRAHMA < $turkeyPrice->BRAHMA)
                            <i class="mdi mdi-arrow-up text-lg  text-DeepRed"></i> 
                        @endif
                        @endforeach
                    </div>
                </div>
                @endforeach                
            </div>
        </div>
    </div>
</section>

<x-footer/> 
</div>
