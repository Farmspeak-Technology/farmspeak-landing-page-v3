<div>
  <x-navBar/>
<!-------  Hero Section   ------------->
<section>
    <!-------  Flex Container   -------------->
    <div class="container max-w-6xl flex flex-col md:flex-row items-center px-6 mx-auto mt-10 space-y-0 md:space-x-10 md:space-y-0">
        <!---  left item---->
        <div class="flex flex-col my-32 space-y-6 md:w-1/2">
            <h1 class="max-w-2xl text-4xl font-medium font-sans text-center text-DeepGreen md:leading-tight md:text-5xl md:text-left" > Farm management software for your poultry farm</h1>

            <p class="max-w-sm mx-auto mr-1 text-center text-lg md:text-xl font-normal md:text-left md:mx-0 ">FS Manager provides you with an all-in-one software management solution that lets you ditch the paper work and focus on your passion. </p>

            <div class="flex justify-center md:justify-start">
                <a href="#" class="p-3 px-6 pt-2 text-DeepGreen bg-deepYellow rounded-full baseline hover:bg-DeepGreen hover:text-white">Request Demo</a>
            </div>      
        </div>
        <!---  right item---->
        <div class="md:pl-5">
            <img src="{{ asset('assets/img/products/fsmanager-1.svg') }}" alt="fsmanager-1">
        </div>

    </div>
</section>

<section>
    <div class="container max-w-6xl text-center items-center px-6 mx-auto">
        <div class="mx-auto">
          <h2 class="text-2xl text-lightBrown font-bold md:text-3xl">About <span class="text-DeepGreen">FS Manager</span>   </h2>
        </div>
      </div>
    <!-------  Flex Container   -------------->
    <div class="container max-w-6xl py-10 flex flex-col md:flex-row  px-6 mx-auto mt-10 space-y-6 md:items-center md:space-y-0 md:space-x-20">
        <!---  left item---->
        <div class="md:w-1/2 max-w-full">
           <div class="mx-auto p-5 bg-DeepGreen rounded-md">
                <div
                class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden items-center"
                style="padding-top: 56.25%">
                <iframe
                    class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full"
                    src="https://www.youtube.com/embed/rDXX9JtsVwY"
                    allowfullscreen></iframe>
                </div>
            </div>
        </div>
        
        <!---  right item---->
        <div class="flex flex-col space-y-6">
            <div class="flex flex-row p-5 rounded-md space-x-6 items-center bg-lighterTeal">
                <img src="{{ asset('assets/img/icons/icon-2.svg') }}" alt="icon-2">
                <p class="max-w-sm text-start text-DeepGreen text-sm md:text-md font-normal md:text-left ">With FS Manager you can manage your farm and monitor performance of the farm. You can easily and quickly get necessary data.</p>
                
            </div>

            <div class="flex flex-row p-5 rounded-md space-x-6 items-center bg-lighterTeal">
                <img src="{{ asset('assets/img/icons/icon-1.svg') }}" alt="icon-2">
                <p class="max-w-sm text-start text-DeepGreen text-sm md:text-md font-normal md:text-left ">FS Manager will help you to analyze performance and productivity of your farm and your egg production.</p>
                
            </div>     
        </div>
    </div>
</section>
<section >
    <div class="container max-w-6xl text-center items-center px-6 mx-auto">
        <div class="mx-auto">
          <h2 class="text-2xl text-lightBrown font-bold md:text-3xl mt-24">Features</h2>
        </div>
    </div>

    <div class="container max-w-6xl mx-auto pt-14">
        <div class="flex flex-col space-y-5 md:space-y-0 md:flex-row md:space-x-20 px-10">
            <div class="flex flex-col space-y-2 items-center text-center">
                <img src="{{ asset('assets/img/products/fsmanager-2.svg') }}" alt="fsmanager-2">
                <h6 class="text-2xl font-bold text-lightBrown md:pt-2">Record Daily Activity</h6>
                <p class="text-lg">
                    Record your chicken's daily activities such as transfers, body weight, environment, and add photos.
                </p>
            </div>

            <div class="flex flex-col space-y-2 items-center text-center">
                <img src="{{ asset('assets/img/products/fsmanager-3.svg') }}" alt="fsmanager-3">
                <h6 class="text-2xl font-bold text-lightBrown md:pt-8">Quick Analysis</h6>
                <p class="text-lg">
                    Your data will be calculated and presented according to common key performance indicator.
                </p>

            </div>
            
            <div class="flex flex-col items-center text-center">
                <img src="{{ asset('assets/img/products/fsmanager-4.svg') }}" alt="fsmanager-4">
                <h6 class="text-2xl font-bold text-lightBrown">More Productivity</h6>
                <p class="text-lg">
                    Daily activity performed by operator will be easily monitored. Any urgent matter can be responded quickly.
                </p>

            </div>

        </div>
    </div>
</section>

<x-yellowBanner/>
<div class="mb-24"></div>

<x-footer/> 
</div>
