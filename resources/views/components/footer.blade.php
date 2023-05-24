<section class="bg-DeepGreen">
    <div class="container max-w-6xl text-center items-center px-6 mx-auto  space-y-0 md:space-y-0">

        <!-- Start Footer -->
    <footer class="py-16">
      <div class="mx-auto max-w-6xl">
        <div class="flex flex-col space-x-10  md:flex-row">
          <div class="flex flex-col items-center  md:max-w-1/5 md:text-center">
            <div class="">
              <a href="{{ route('home') }}">
                <img
                  src="{{ asset('assets/img/logo-2.svg') }}"
                  class="mb-3 mx-auto md:mx-0"
                  
                  alt="Farmspeak Logo"
                />
              </a>
              <p class="text-md text-white text-center px-10 md:px-0 md:max-w-sm md:text-start">
                FarmSpeak provides a poultry management solution to meet the needs of a poultry enterprise of any size.
              </p>

              <div class="flex flex-row items-start md:items-start pt-5 space-x-3">
                <i class="mdi mdi-map-marker text-2xl md:text-5xl pl-10 md:pl-0 text-center  md:text-start text-white"></i>
                <p class="pr-10  text-white text-start md:max-w-sm md:pr-0 "> Kobape Road, Beside President Muhammadu Buhari Estate, 110118, Kobape Abeokuta, Ogun State, Nigeria </p>
                
              </div>

              <div class="flex flex-col md:flex-row md:space-x-3 ">
                <div class="flex flex-row items-center md:items-start space-x-3 pt-5">
                  <i class="mdi mdi-phone text-2xl pl-10 md:pl-0 text-center  md:text-start text-white"></i>
                  <p class="pr-10  text-white text-start md:max-w-sm md:pr-0 "> <a href="tel:+2348083607945">+2348083607945</a> </p>
                </div>

                <div class="flex flex-row items-center md:items-center space-x-3 pt-5">
                  <i class="mdi mdi-email text-2xl pl-10 md:pl-0 text-center  md:text-start text-white"></i>
                  <p class="pr-10  text-white text-start md:max-w-sm md:pr-0 "> <a href="mailto:support@farmspeak.net">support@farmspeak.net</a> </p>
                </div>
              </div>

            </div>
          </div>

           

          <div class="flex flex-col items-start md:items-start  md:max-w-1/5">
            <div class="!w-[90%] block md:hidden"><hr class="my-6  border-t bg-white opacity-100 pr-10  px-20"/></div>
           
            <h3 class="text-xl text-white text-start font-bold">Company</h3>
            <ul class="mt-2 text-start md:text-start text-sm text-white">
                <a href="{{ route('about-us') }}" class="social-icon hover:text-DeepRed"
                  ><li>About Us</li></a
                >
                <a href="#" class="social-icon hover:text-DeepRed"
                  ><br />
                  <li>Careers </li>
                </a>
                <a href="#" class="social-icon hover:text-DeepRed"
                  ><br />
                  <li>Terms & Conditions</li>
                </a>
                <a href="#" class="social-icon hover:text-DeepRed"
                  ><br />
                  <li>Privacy policy </li>
                </a>
              </ul>
          </div>

          <div class="flex flex-col items-start md:items-start  md:max-w-1/5">
            <div class="!w-[90%] block md:hidden"><hr class="my-6  border-t bg-white opacity-100 pr-10  px-20"/></div>
           
            <h3 class="text-xl text-white text-start font-bold">Product</h3>
            <ul class="mt-2 text-start md:text-start text-sm text-white">
                <a href="{{ route('fsmanager') }}" class="social-icon hover:text-DeepRed"
                  ><li>FS Manager</li></a
                >
                <a href="{{ route('fsmarket') }}" class="social-icon hover:text-DeepRed"
                  ><br />
                  <li>FS Market </li>
                </a>
                <a href="{{ route('fspos') }}" class="social-icon hover:text-DeepRed"
                  ><br />
                  <li>FS POS</li>
                </a>
                <a href="{{ route('penkeep') }}" class="social-icon hover:text-DeepRed"
                  ><br />
                  <li>Smart Penkeep </li>
                </a>
              </ul>
          </div>

          <div class="flex flex-col items-start md:items-start  md:max-w-1/5">
            <div class="!w-[90%] block md:hidden"><hr class="my-6  border-t bg-white opacity-100 pr-10  px-20"/></div>
           
            <h3 class="text-xl text-white text-start font-bold">Resources </h3>
            <ul class="mt-2 text-start md:text-start text-sm text-white">
                {{-- <a href="#" class="social-icon hover:text-DeepRed"
                  ><li>Learn & support</li></a
                > --}}
                <a href="{{ route('blog') }}" class="social-icon hover:text-DeepRed"
                  >
                  <li>News  </li>
                </a>
                <a href="{{ route('contact') }}" class="social-icon hover:text-DeepRed"
                  ><br />
                  <li>Contact us</li>
                </a>
                <a href="{{ route('trainings') }}" class="social-icon hover:text-DeepRed"
                  ><br />
                  <li>Online Trainings </li>
                </a>
                <a href="{{ route('events') }}" class="social-icon hover:text-DeepRed"
                  ><br />
                  <li>Events </li>
                </a>
              </ul>
          </div>

          <div class="flex flex-col items-start md:items-start  md:max-w-1/5">
            <div class="!w-[90%] block md:hidden"><hr class="my-6  border-t bg-white opacity-100 pr-10  px-20"/></div>
            <h3 class="text-xl text-white text-start font-bold">Say connected  </h3>

            <div class="flex flex-row space-x-3 mt-3">
                
                    <a
                      href="https://www.instagram.com/farm_speak/"
                      target="_blank"
                      class="btn btn-icon btn-link btn-md da social-icon rounded-md text-white hover:border-[#92df16] hover:!text-[#92df16]"
                      ><i
                        class="uil uil-instagram align-middle text-2xl"
                        title="instagram"
                      ></i
                    ></a>
                    <a
                      href="https://www.linkedin.com/company/farmspeak-technology/"
                      target="_blank"
                      class="btn btn-icon btn-link btn-md da social-icon rounded-md text-white hover:border-[#92df16] hover:!text-[#92df16]"
                      ><i class="uil uil-linkedin text-2xl" title="Linkedin"></i
                    ></a>
                    <a
                      href="https://www.facebook.com/FarmspeakTechnology"
                      target="_blank"
                      class="btn btn-icon btn-link btn-md da social-icon rounded-md text-white hover:border-[#92df16] hover:!text-[#92df16]"
                      ><i
                        class="uil uil-facebook-f align-middle text-xl"
                        title="facebook"
                      ></i
                    ></a>
                  
                    <a
                      href="https://twitter.com/farmspeak1"
                      target="_blank"
                      class="btn btn-icon btn-link btn-md da social-icon rounded-md text-white hover:border-[#92df16] hover:!text-[#92df16]"
                      ><i
                        class="uil uil-twitter align-middle text-2xl"
                        title="twitter"
                      ></i
                    ></a>
                 
            </div>
            
          </div>

          

        </div>
      </div>
      




          
          
        <!--end row-->

        <div class="flex justify-center mt-10">
          <div class="mx-auto">
            <br />
            <p class="text-sm text-white sm:mx-auto">
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              Farmspeak Technology Limited
            </p>
          </div>
        </div>
      </div>
      <!--end container-->
    </footer>
    
    <!--end footer-->
    <!-- End Footer -->

    <!-- Back to top -->
    <a
      href="#"
      onclick="topFunction()"
      id="back-to-top"
      class="back-to-top fixed bottom-5 right-5 z-10 hidden h-9 w-9 rounded-full bg-secondary text-center text-lg leading-9 text-primary"
      ><i class="uil uil-arrow-up"></i
    ></a>
    <!-- Back to top -->
       

</div>
    
</section> 