<div>
<x-navBar/>

<section>
    <div
  id="carouselDarkVariant"
  class="relative hidden md:block mt-14"
  data-te-carousel-init
  data-te-carousel-slide>
  <!-- Carousel indicators -->
  <div
    class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
    data-te-carousel-indicators>
    <button
      data-te-target="#carouselDarkVariant"
      data-te-slide-to="0"
      data-te-carousel-active
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-current="true"
      aria-label="Slide 1"></button>
    <button
      data-te-target="#carouselDarkVariant"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      data-te-slide-to="1"
      aria-label="Slide 1"></button>
    <button
      data-te-target="#carouselDarkVariant"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      data-te-slide-to="2"
      aria-label="Slide 1"></button>
  </div>

  <!-- Carousel items -->
  <div
    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
    <!-- First item -->
    <div
      class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-fade
      data-te-carousel-item
      data-te-carousel-active>
      <img
        src="{{ asset('assets/img/bg-hardware.svg') }}"
        class="block w-full"
        alt="poultry IoT hardware " />
      <div
        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
            <div class="container max-w-6xl  flex flex-col md:flex-row items-end px-6 mx-auto mt-10 md:pt-64 space-y-0 md:space-x-10 md:space-y-0">
        <!---  left item---->
            <div class="flex flex-col my-32 space-y-6 ">
                <h1 class="max-w-2xl text-4xl  font-bold font-sans text-center text-white md:leading-tight md:text-5xl md:text-left" > Easier poultry farm management starts here.</h1>
                
                <p class="max-w-sm mx-auto text-white text-center text-lg md:text-xl font-normal md:text-left md:mx-0 ">Capture real-time data, increase transparency, and mitigate the effect of climate change </p>

                <div class="flex justify-center md:justify-start">
                    <a href="{{ route('contact') }}" class="p-3 px-6 pt-2 text-black bg-white rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen">Buy Now</a>
                </div>      
            </div>
        <!---  right item---->
            <div class="md:w-2/3  items-baseline">
            <div class="flex flex-col items-end">
                <img src="{{ asset('assets/img/products/hardware-1.svg') }}" alt="Smart Penkeep">
            </div>
            </div>

        </div>
      </div>
    </div>
    <!-- Second item -->
    <div
      class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-fade
      data-te-carousel-item>
      <img
        src="{{ asset('assets/img/bg-hardware-2.svg') }}"
        class="block w-full"
        alt="poultry IoT hardware " />
      <div
        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
            <div class="container max-w-6xl  flex flex-col md:flex-row items-end px-6 mx-auto mt-10  space-y-0 md:space-x-10 md:space-y-0">
        <!---  left item---->
            <div class="flex flex-col my-32 space-y-6 ">
                <h1 class="max-w-2xl text-4xl font-bold font-sans text-center text-white md:leading-tight md:text-5xl md:text-left" > Smart PenKeep</h1>
                
                <p class="max-w-md mx-auto text-white text-center text-lg md:text-xl font-normal md:text-left md:mx-0 ">Automatic data capture of temperature, humidity, air quality, water level, and water temperature </p>

                <div class="flex justify-center md:justify-start">
                    <a href="{{ route('contact') }}" class="p-3 px-6 pt-2 text-black bg-white rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen">Buy Now</a>
                </div> <br><br><br><br>   
            </div>
        <!---  right item---->
            <div class="md:w-2/3  items-baseline">
            <div class="flex flex-col items-end">
                <img src="{{ asset('assets/img/products/slider-3.svg') }}" alt="Smart Penkeep">
            </div>
            </div>

        </div>
      </div>
    </div>
    <!-- Third item -->
    <div
      class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-fade
      data-te-carousel-item>
      <img
        src="{{ asset('assets/img/bg-hardware-3.svg') }}"
        class="block w-full"
        alt="poultry IoT hardware " />
        
      <div
        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
        <div class="container max-w-6xl  flex flex-col md:flex-row items-end px-6 mx-auto mt-10  space-y-0 md:space-x-10 md:space-y-0">
        <!---  left item---->
            <div class="flex flex-col mt-2 space-y-6 ">
                <h1 class="max-w-3xl text-4xl font-bold font-sans text-center text-white md:leading-tight md:text-4xl md:text-left" >Smart Farm Camera</h1>
                
                <p class="max-w-sm mx-auto text-white text-center text-lg md:text-xl font-normal md:text-left md:mx-0 ">With a 4X digital zoom, wifi surveillance, and two-way voice and one-way video call functions, you can monitor your farm remotely and stay connected to your birds. </p>

                <div class="flex justify-center md:justify-start">
                    <a href="{{ route('contact') }}" class="p-3 px-6 pt-2 text-black bg-white rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen">Buy Now</a>
                </div> <br><br>     
            </div>
        <!---  right item---->
            <div class="md:w-2/3  items-baseline">
            <div class="flex flex-col items-end">
                <img src="{{ asset('assets/img/products/slider-2.svg') }}" 
                alt="Smart Penkeep">
            </div>
            </div>

        </div>


      </div>
    </div>
  </div>

  <!-- Carousel controls - prev item-->
  <button
    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselDarkVariant"
    data-te-slide="prev">
    <span class="inline-block h-8 w-8 dark:grayscale">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="white"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Previous</span
    >
  </button>
  <!-- Carousel controls - next item-->
  <button
    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselDarkVariant"
    data-te-slide="next">
    <span class="inline-block h-8 w-8 dark:grayscale">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="white"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Next</span
    >
  </button>
</div>
</section>

<!-------  Hero Section   ------------->
<section class="block md:hidden" style="background: linear-gradient(101.21deg, rgba(4, 4, 4, 0.675737) 1.41%, rgba(0, 0, 0, 0.69) 4.41%, rgba(2, 2, 2, 0.681662) 13.14%, rgba(5, 5, 5, 0.670927) 18.69%, rgba(9, 8, 8, 0.657583) 22.4%, rgba(14, 13, 13, 0.638989) 28.9%, rgba(32, 29, 29, 0.572165) 42.18%, rgba(32, 29, 29, 0.548601) 44.78%, rgba(32, 29, 29, 0.518654) 61.51%, rgba(32, 29, 29, 0.461024) 69.82%, rgba(32, 29, 29, 0.416249) 76.59%, rgba(32, 29, 29, 0.304961) 86.12%, rgba(32, 29, 29, 0.0939621) 93.55%, rgba(32, 29, 29, 0) 100%, rgba(0, 0, 0, 0.0351419) 100%);">
    <!-------  Flex Container   -------------->
    <div class="container max-w-6xl  flex flex-col md:flex-row items-end px-6 mx-auto mt-10  space-y-0 md:space-x-10 md:space-y-0">
        <!---  left item---->
        <div class="flex flex-col mt-32 md:my-32 space-y-6 ">
            <h1 class="max-w-2xl text-4xl font-bold font-sans text-center text-white md:leading-tight md:text-5xl md:text-left" > Easier poultry farm management starts here.</h1>
            
            <p class="max-w-sm mx-auto text-white text-center text-lg md:text-xl font-normal md:text-left md:mx-0 ">Capture real-time data, increase transparency, and mitigate the effect of climate change </p>

            <div class="flex justify-center md:justify-start">
                <a href="{{ route('contact') }}" class="p-3 px-6 pt-2 text-black bg-white rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen">Buy Now</a>
            </div>      
        </div>
        <!---  right item---->
        <div class="md:w-2/3  md:items-baseline">
           <div class="flex flex-col items-end">
             <img src="{{ asset('assets/img/products/hardware-1.svg') }}" alt="Farmspeak poultry Hardware">
           </div>
        </div>

    </div>

</section>

<section>
    <div class="container max-w-6xl text-center items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
        <h6 class="text-3xl max-w-3xl text-center mx-auto font-bold text-[#606060] pb-2 ">It's your farm. We're here to help it grow!</h6>
        <p>Shop all the lastest hardware solutions for your poultry farm today </p>

    </div>   
</section>

<section class="hidden md:block">
            <div class="container mx-auto px-5 py-2 lg:px-36 lg:pt-24">
                <div class="-m-1 flex flex-wrap md:-m-2">
                    <div class="flex w-[40%] items-center  bg-lighterYellow rounded-lg gap-5">
                
                        <div class="p-1 md:-p-2 items-center mx-auto">
                            <img
                            alt="Farm cam"
                            class="block  rounded-lg object-cover object-center "
                            src="{{ asset('assets/img/products/hardware-3.svg') }}" />
                            <p class="text-xl font-bold text-[#606060] text-center">Farm Cam</p>
                        </div>
                    </div>

                    <div class="flex flex-col w-[60%] space-y-6 pl-6">

                        <div class="flex flex-row space-x-6">
                            <div class="w-1/2 p-1 md:p-2 bg-lightestGreen rounded-lg ">
                                <div class="flex flex-col">
                                    
                                    <img
                                alt="Electric brooder"
                                class="block h-[50%] w-[50%] rounded-lg object-cover object-center mx-auto"
                                src="{{ asset('assets/img/products/hardware-6.svg') }}" />
                                <p class="text-xl font-bold text-[#606060] text-center pt-3">Electric brooder</p>
                                
                                </div>
                            </div>
                            <div class="w-1/2 p-1 bg-lightestGreen rounded-lg ">
                                <div class="flex flex-col">
                                    <img
                                alt="Automatic gas broader"
                                class="block h-[43.5%] w-[43.5%] rounded-lg object-cover object-center mx-auto"
                                src="{{ asset('assets/img/products/hardware-4.svg') }}" />
                                <p class="text-xl font-bold text-[#606060] text-center">Automatic gas broader</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-row space-x-6">
                            <div class="w-1/2 p-1 md:p-2 bg-lightestGreen rounded-lg ">
                                    <div class="flex flex-col">
                                        <img
                                        alt="Infared heater bulb"
                                        class="block h-[50%] w-[50%] rounded-lg object-cover object-center mx-auto"
                                        src="{{ asset('assets/img/products/hardware-2.svg') }}" />
                                        <p class="text-xl font-bold text-[#606060] text-center">Infared heater bulb</p>
                                    </div>
                            </div>
                            <div class="w-1/2 p-1 md:p-2 bg-lightestGreen rounded-lg ">
                                <div class="flex flex-col">
                                    <img
                                alt="Penkeep Addon"
                                class="block h-[50%] w-[50%] rounded-lg object-cover object-center mx-auto"
                                src="{{ asset('assets/img/products/hardware-5.svg') }}" />
                                <p class="text-xl font-bold text-[#606060] text-center pb-3">PenKeep Add-on</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-----  mobile view for products   -------->
<section class="block md:hidden">
    <div class="container max-w-6xl text-center items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0  pt-10">
        <div class="flex flex-col space-y-10">
            <div class="flex flex-col bg-lighterYellow rounded-lg">
                <div class="flex flex-col">
                    <img
                    alt="Farm Cam"
                    class="block h-[50%] w-[50%] rounded-lg object-cover object-center mx-auto"
                    src="{{ asset('assets/img/products/hardware-3.svg') }}" />
                    <p class="text-xl font-bold text-[#606060] text-center pb-4">Farm Cam</p>
                </div>
            </div>

            <div class="flex flex-col bg-lightestGreen  rounded-lg">
                <div class="flex flex-col">
                                    
                    <img
                alt="Electric brooder"
                class="block h-[50%] w-[50%] rounded-lg object-cover object-center mx-auto"
                src="{{ asset('assets/img/products/hardware-6.svg') }}" />
                <p class="text-xl font-bold text-[#606060] text-center pt-3 pb-4">Electric brooder</p>
                
                </div>
            </div>

            <div class="flex flex-col bg-lightestGreen  rounded-lg">
                <div class="flex flex-col">
                    <img
                    alt="Automatic gas broader"
                    class="block h-[43.5%] w-[43.5%] rounded-lg object-cover object-center mx-auto"
                    src="{{ asset('assets/img/products/hardware-4.svg') }}" />
                    <p class="text-xl font-bold text-[#606060] text-center pb-4">Automatic gas broader</p>
                </div>
            </div>

            <div class="flex flex-col bg-lightestGreen  rounded-lg">
                <div class="flex flex-col">
                    <img
                    alt="Infared heater bulb"
                    class="block h-[50%] w-[50%] rounded-lg object-cover object-center mx-auto"
                    src="{{ asset('assets/img/products/hardware-2.svg') }}" />
                    <p class="text-xl font-bold text-[#606060] text-center pb-4">Infared heater bulb</p>
                </div>
            </div>

            <div class="flex flex-col bg-lightestGreen  rounded-lg">
                <div class="flex flex-col">
                    <img
                    alt="Penkeep Addon"
                    class="block h-[50%] w-[50%] rounded-lg object-cover object-center mx-auto"
                    src="{{ asset('assets/img/products/hardware-5.svg') }}" />
                    <p class="text-xl font-bold text-[#606060] text-center pb-4">PenKeep Add-on</p>
                </div>
            </div>
            
           
        </div>
    </div>
    
</section>

<section class="my-24">
        <div class="container max-w-6xl text-center items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 bg-lighterYellow pt-10">
            <h6 class="text-3xl max-w-3xl text-center mx-auto font-bold text-[#606060] pb-4">Smart PenKeep</h6>
            <p class="max-w-2xl text-center mx-auto">PenKeep gives the farmer total control over the micro climate in the pen house as he/she can monitor and control those environmental parameters.</p>

            <img src="{{ asset('assets/img/products/penkeep.svg') }}" alt="Smart Penkeep" class="mx-auto">

            <div class="flex justify-center md:justify-start pt-4 pb-10">
                    <a href="{{ route('blog') }}" class="mx-auto p-3 px-6 pt-2 text-white bg-[#606060] rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen">Learn More</a>
                </div> 
            
        </div>

</section>



<x-footer/>

</div>
