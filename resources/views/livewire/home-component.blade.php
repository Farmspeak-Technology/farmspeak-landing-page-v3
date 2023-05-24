<x-navBar/>
<!-------  Hero Section   ------------->
<section>
    <!-------  Flex Container   -------------->
    <div class="container max-w-6xl flex flex-col md:flex-row items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
        <!---  left item---->
        <div class="flex flex-col my-32 space-y-6 md:w-2/3">
            <h1 class="max-w-2xl text-4xl font-medium font-sans text-center text-DeepGreen md:leading-tight md:text-5xl md:text-left" > Grow your poultry business  with FarmSpeak.</h1>

            <p class="max-w-sm mx-auto text-center text-lg md:text-xl font-normal md:text-left md:mx-0 ">We use technology to enable African poultry farmers to quickly manage and monitor their farms.  </p>

            <div class="flex justify-center md:justify-start">
                <a href="{{ route('pricing') }}" class="p-3 px-6 pt-2 text-white bg-lightGreen rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen">Get Started</a>
            </div>      
        </div>
        <!---  right item---->
        <div class="md:pl-5">
            <img class="w-full" src="{{ asset('assets/img/poultry-lady.svg') }}" alt="poultry farmer">
        </div>

    </div>

</section>

<section>
    <div class="container max-w-6xl text-center items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
        <h6 class="text-3xl max-w-3xl text-center mx-auto text-DeepGreen">We are creating climate-smart technologies that revolutionize poultry farming in Africa.</h6>

    </div>
    
</section>

<section>
    <!-------  Flex Container   -------------->
    <div class="container max-w-6xl py-10 flex flex-col md:flex-row items-center px-6 mx-auto mt-10 bg-lightYellow space-y-0 md:space-y-0">
        <!---  left item---->
        <div class="md:w-1/2">
            <img src="{{ asset('assets/img/phone.svg') }}" alt="poultry farmer">
        </div>
        
        <!---  right item---->
        <div class="flex flex-col space-y-6">
            <div class="flex flex-col pt-3 md:pt-0">
                <h6 class="text-DeepGreen text-lg font-bold md:text-md">FS MANAGER </h6>
                <p class="max-w-sm text-start text-DeepGreen text-sm md:text-md font-normal md:text-left ">Track your business finances with ease, and never miss a penny again. Start today and watch your business grow.  </p>
                
            </div>

            <div class="flex flex-col">
                <h6 class="text-DeepGreen text-lg font-bold md:text-md">FS MARKET  </h6>
                <p class="max-w-sm text-start text-DeepGreen text-sm md:text-md font-normal md:text-left ">Easily setup an online store with a few clicks to promote and sell all kinds of poultry products. </p>
                
            </div>

            <div class="flex flex-col">
                <h6 class="text-DeepGreen text-lg font-bold md:text-md">FS POS </h6>
                <p class="max-w-sm text-start text-DeepGreen text-sm md:text-md font-normal md:text-left "> Track your ales and expenses, Send digital receipts invoices, and recover debts..  </p>
                
            </div>

            

            <div class="flex justify-center md:justify-start">
                <a href="{{ route('pricing') }}" class="p-3 px-6 pt-2 text-white bg-lightGreen rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen">Get Started</a>
            </div>      
        </div>
        

    </div>

</section>

<section>
    <!-------  Flex Container   -------------->
    <div class="container max-w-6xl flex flex-col md:flex-row items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
        <!---  left item---->
        <div class="flex flex-col mb-32 space-y-6 md:w-2/3">
            <div class="flex flex-col">
                <p class="text-sm text-center font-bold text-lighterBlack md:pt-5 pb-3 md:text-start">SMART PENKEEP</p>
                <h6 class="text-xl text-DeepGreen text-center font-medium md:text-2xl md:text-start">The answer to healthy flocks.</h6>
                <p class="max-w-sm pt-3 text-center text-sm md:text-lg text-lighterBlack font-normal md:text-left ">Nurture your birds with ease. If you are planning to improve the health of your birds, then SMART PENKEEP is the answer. It empowers farmers to control, monitor, manage their pen environment remotely.  </p>
            </div>
            

            <div class="flex justify-center md:justify-start">
                <a href="{{ route('penkeep') }}" class="p-3 px-6 pt-2 border border-DeepGreen text-DeepGreen bg-transparent rounded-full baseline hover:bg-DeepGreen hover:text-white">Learn More</a>
            </div>      
        </div>
        <!---  right item---->
        <div class="md:pl-5">
            <img src="{{ asset('assets/img/poultry-pen.svg') }}" alt="poultry farmer">
        </div>

    </div>

</section>

<x-partners/>

<section class="mb-24">
    <form id="subscribeform"
    action="https://farmspeak.us14.list-manage.com/subscribe/post?u=3672f2f524dee3a3fea7abacc&amp;id=c7b511ff99"
    method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                        target="_blank" >
    <div class="container py-14 max-w-6xl bg-lightBrown text-center items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
        <h6 class="text-2xl text-white font-bold md:text-3xl">Stay in touch with us </h6>
        <p class="text-md text-white py-5">Sign up for the latest updates and poultry news</p>
        <div class="flex mb-3 max-w-lg space-x-6 mx-auto">

  <div class="relative mb-4 flex w-full flex-wrap items-stretch space-x-4">
    <input
      type="email"
      class="relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto rounded-r-md rounded-l-md border border-solid border-neutral-300 bg-white bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none "
      name="EMAIL" 
      data-msg-required="Please enter your email address."
      data-msg-email="Please enter a valid email address." maxlength="100"
      class="form-control" name="EMAIL" id="mce-EMAIL" required
      data-msg-required="Please enter your email address."
      data-msg-email="Please enter a valid email address."
      id="mce-EMAIL" 
      placeholder="Enter Email Address"
      aria-label="Enter Email Address"
      aria-describedby="button-addon3" required/>
      <div style="position: absolute; left: -5000px;" 
      aria-hidden="true">
        <input type="text"
        name="b_3672f2f524dee3a3fea7abacc_c7b511ff99" 
        tabindex="-1" 
        value="">
    </div>

    <!--Search button-->
    <button
      class="relative z-[2] rounded-r-md rounded-l-md border-2 border-lightGreen px-6 py-2 text-xs font-medium bg-lightGreen text-white transition duration-150 ease-in-out hover:bg-deepYellow hover:bg-opacity-5 focus:outline-none focus:ring-0 hover:border-deepYellow"
      type="submit"
      id=" mc-embedded-subscribe" 
      name="subscribe"
      data-te-ripple-init>
      Subscribe
    </button>
  </div>
</div>

    </div>
  </form>

</section>

<x-footer/>


   



