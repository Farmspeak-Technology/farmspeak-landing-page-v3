<div>
    <x-navBar/>
<!-------  Hero Section   ------------->
<section class="bg-lowTeal">
    <!-------  Flex Container   -------------->
    <div class="container max-w-6xl  flex flex-col md:flex-row items-center px-6 mx-auto mt-10  space-y-0 md:space-x-10 md:space-y-0">
        <!---  left item---->
        <div class="flex flex-col my-32 space-y-6 ">
            <h1 class="max-w-2xl text-4xl font-medium font-sans text-center text-DeepGreen md:leading-tight md:text-5xl md:text-left" > Simple bookkeeping for your small scale enterprise</h1>
            
            <p class="max-w-sm mx-auto text-center text-lg md:text-xl font-normal md:text-left md:mx-0 ">Effortlessly handle your finances, send invoices and receipts, and efficiently track and manage your money, especially during the initial stages.  </p>

            <div class="flex justify-center md:justify-start">
                <a href="#" class="p-3 px-6 pt-2 text-white bg-lightGreen rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen">Get Started</a>
            </div>      
        </div>
        <!---  right item---->
        <div class="md:w-2/3">
            <img src="{{ asset('assets/img/products/fspos-2.svg') }}" alt="Fs Market">
        </div>

    </div>

</section>


<section>
    <!-------  Flex Container   -------------->
    <div class="container max-w-6xl py-10 flex flex-col md:flex-row items-center px-10 md:pl-20 mx-auto mt-10  space-y-0 md:space-y-0">
        <!---  left item---->
        <div class="md:w-1/2">
            <img src="{{ asset('assets/img/products/fspos-1.svg') }}" alt="Fs Market">
        </div>
        
        <!---  right item---->
        <div class="flex flex-col space-y-6 pt-10 md:pt-0">
            <h3 class="text-4xl md:text-5xl font-semibold text-DeepGreen">Bookkeeping </h3>
            <div class="flex flex-row pt-3 md:pt-0 items-center space-x-1">
                <i class="mdi mdi-check text-2xl font-bold text-DeepGreen"></i>
                <p class="max-w-md text-start text-DeepGreen text-sm md:text-lg font-normal md:text-left ">Record your daily sales and income </p>
                
            </div>

            <div class="flex flex-row pt-3 md:pt-0 items-center space-x-1">
                <i class="mdi mdi-check text-2xl font-bold text-DeepGreen"></i>
                <p class="max-w-md text-start text-DeepGreen text-sm md:text-lg font-normal md:text-left ">Send free Receipts and Invoices </p>
                
            </div>

            <div class="flex flex-row pt-3 md:pt-0 items-center space-x-1">
                <i class="mdi mdi-check text-2xl font-bold text-DeepGreen"></i>
                <p class="max-w-md text-start text-DeepGreen text-sm md:text-lg font-normal md:text-left ">Recover Debt faster from debtors </p>
                
            </div>

            <div class="flex flex-row pt-3 md:pt-0 items-center space-x-1">
                <i class="mdi mdi-check text-2xl font-bold text-DeepGreen"></i>
                <p class="max-w-md text-start text-DeepGreen text-sm md:text-lg font-normal md:text-left ">Manage your stock  </p>
                
            </div>

            

                 
        </div>
        

    </div>
</section>
<x-yellowBanner/>
<div class="mb-24"></div>
<x-footer/> 
</div>
