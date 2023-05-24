<div>
    <x-navBar/>
<!-------  Hero Section   ------------->
<section class="bg-lowTeal">
    <!-------  Flex Container   -------------->
    <div class="container max-w-6xl  flex flex-col md:flex-row items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
        <!---  left item---->
        <div class="flex flex-col my-32 space-y-6 ">
            <h1 class="max-w-2xl text-4xl font-medium font-sans text-center text-DeepGreen md:leading-tight md:text-5xl md:text-left" > Take your farm sales online.</h1>

            <p class="max-w-sm mx-auto text-center text-lg md:text-xl font-normal md:text-left md:mx-0 ">Integrated farm e-commerce platform helps poultry farmers market and sell their products online. No setup or extra fees.  </p>

            <div class="flex justify-center md:justify-start">
                <a href="#" class="p-3 px-6 pt-2 text-white bg-lightGreen rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen">Get Started</a>
            </div>      
        </div>
        <!---  right item---->
        <div class="md:w-2/3">
            <img src="{{ asset('assets/img/products/fsmarket-1.svg') }}" alt="Fs Market">
        </div>

    </div>

</section>
<section>
    <div class="container max-w-6xl text-center items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
        <h3 class="text-3xl max-w-2xl text-center mx-auto text-DeepGreen md:text-4xl font-bold" >Easy to setup, simple to manage online farm sales software.</h3>
        <p class="text-lightBrown text-2xl pt-6">Automate your sales, orders and inventory.</p>

    </div>  
</section>

<section>
    <!-------  Flex Container   -------------->
    <div class="container max-w-6xl py-10 flex flex-col md:flex-row items-center px-6 mx-auto mt-10  space-y-0 md:space-y-0">
        <!---  left item---->
        <div class="md:w-1/2">
            <img src="{{ asset('assets/img/products/fsmarket-2.svg') }}" alt="Fs Market">
        </div>
        
        <!---  right item---->
        <div class="flex flex-col space-y-16 pt-10 md:pt-0">
            <div class="flex flex-col pt-3 md:pt-0 space-y-3">
                <h6 class="text-DeepGreen text-lg font-bold md:text-xl">Simple to setup, automatically integrated. </h6>
                <p class="max-w-md text-start text-black text-sm md:text-lg font-normal md:text-left ">Quickly create your products. Streamline inventory management with FarmSpeak technology. Automate revenue and order reporting. </p>
                
            </div>

            <div class="flex flex-col space-y-3">
                <h6 class="text-DeepGreen text-lg font-bold md:text-xl">Flexible listing & inventory options. </h6>
                <p class="max-w-md text-start text-black text-sm md:text-lg font-normal md:text-left ">Automatically limit quantity, manage variable retail and wholesale prices, Apply delivery fees. Specify custom pickup times and locations and offer pick up or delivery options. </p>
                
            </div>

            <div class="flex flex-col space-y-3">
                <h6 class="text-DeepGreen text-md font-bold md:text-xl">Market & sell online</h6>
                <p class="max-w-md text-start text-black text-sm md:text-lg font-normal md:text-left "> Orders seamlessly update your inventory and give a list of orders to keep your operation running smoothly and transactions automatically record revenue in FarmSpeak. </p>
                
            </div>     
        </div>
        

    </div>
</section>
<x-yellowBanner/>
<div class="mb-24"></div>
<x-footer/> 
</div>
