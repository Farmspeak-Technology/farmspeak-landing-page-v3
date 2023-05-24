<div>
    <section>

        <div class="md:hidden flex flex-col items-center bg-DeepGreen">
                 <img src="{{ asset('assets/img/main-icon-logo.svg') }}" alt="">
            </div>

        <div class="relative mx-auto max-w-full  flex flex-col md:flex-row gap-6 ">

            <!-- Small div with logo -->
            <div class="hidden absolute top-28 left-1/2 items-center justify-center transform -translate-x-1/2 -translate-y-1/2 z-10 rounded-lg md:block">
                <!-- Add your logo here -->
                <img src="{{ asset('assets/img/main-icon-logo.svg') }}" alt="">
                
            </div>

            


            <div class="flex flex-col-reverse md:flex-row items-center bg-deepYellow pt-5 pb-10 justify-center md:py-40 md:w-[100%] md:justify-between">
                <div class="flex flex-col items-center text-center justify-center mx-auto">
                    <h1 class="text-4xl md:text-6xl text-white font-bold md:pl-5"  style="font-family: 'Rubik Bubbles'!important; ">Discover<br> PenKeep </h1>

                    <div class="flex flex-row items-center space-x-6 pt-5">
                        <a href="{{ route('penkeep') }}" class="md:block p-3 px-6 pt-2 text-white bg-lightGreen rounded-full baseline hover:bg-DeepGreen hover:text-deepYellow">Explore</a>
                    </div>

                </div>
                <div class="flex flex-row"> 
                    <img src="{{ asset('assets/img/bg-right.svg') }}" alt="">
                </div>
            </div>

            <div class="flex flex-col-reverse md:flex-row items-center  bg-lightGreen md:w-[100%] md:justify-between pt-5 pb-10 md:pb-0 md:pt-0 justify-center">
                <div class="flex flex-col items-center text-center justify-center mx-auto">
                    <h1 class="text-4xl md:text-6xl text-white font-bold md:pl-5"  style="font-family: 'Rubik Bubbles'!important; ">We<br> 
                    mean<br> business</h1>

                    <div class="flex flex-row items-center space-x-6 pt-5">
                        <a href="{{ route('home') }}" class="md:block p-3 px-6 pt-2 text-white bg-deepYellow rounded-full baseline hover:bg-DeepGreen hover:text-deepYellow">Find Out</a>
                    </div>

                </div>
                <div class="flex flex-row"> 
                    <img src="{{ asset('assets/img/bg-left.svg') }}" alt="">
                </div>

            </div>
        </div>

        <div class="md:hidden flex flex-row space-x-3 py-3 px-5">
            <a
                      href="https://www.instagram.com/farm_speak/"
                      target="_blank"
                      class="btn btn-icon btn-link btn-md da social-icon rounded-md text-DeepGreen hover:text-lightGreen"
                      ><i
                        class="uil uil-instagram align-middle text-2xl"
                        title="instagram"
                      ></i
                    ></a>
                    <a
                      href="https://www.linkedin.com/company/farmspeak-technology/"
                      target="_blank"
                      class="btn btn-icon btn-link btn-md da social-icon rounded-md text-DeepGreen hover:text-lightGreen"
                      ><i class="uil uil-linkedin text-2xl" title="Linkedin"></i
                    ></a>
                    <a
                      href="https://www.facebook.com/FarmspeakTechnology"
                      target="_blank"
                      class="btn btn-icon btn-link btn-md da social-icon rounded-md text-DeepGreen hover:text-lightGreen"
                      ><i
                        class="uil uil-facebook-f align-middle text-xl"
                        title="facebook"
                      ></i
                    ></a>
                  
                    <a
                      href="https://twitter.com/farmspeak1"
                      target="_blank"
                      class="btn btn-icon btn-link btn-md da social-icon rounded-md text-DeepGreen hover:text-lightGreen"
                      ><i
                        class="uil uil-twitter align-middle text-2xl"
                        title="twitter"
                      ></i
                    ></a>
        </div>
    </section>
</div>
