<!---- Navbar ---->
  <nav class="mx-auto px-3 py-4 z-50 md:w-full fixed top-0 bg-white w-full" id="navbar">
    <!------  Flex container  ---------->
    <div class="flex items-center justify-between">
      <!--- Logo --->
    <div class="pl-10">
      <a href="{{ route('home') }}"><img src="{{ asset('assets/img/farmspeak-logo.png') }}" width="80" height="60" alt="Farmspeak Logo"></a>
    </div>

    <!-----  Menu Items  ------->
    <div class="hidden md:flex space-x-12">
      <a href="{{ route('home') }}" class="hover:text-DeepRed {{ Request::path() == 'home' ? 'active' : '' }}">Home</a>
      <a href="{{ route('our-approach') }}" class="hover:text-DeepRed {{ Request::path() == 'our-approach' ? 'active' : '' }}">Our approach</a>
      <div class="relative cursor-pointer" data-te-dropdown-ref>
        <a
          class="flex items-center whitespace-nowrap"
          type="button"
          id="dropdownMenuButton1"
          data-te-dropdown-toggle-ref
          aria-expanded="false"
          data-te-ripple-init
          data-te-ripple-color="light">
          <span class="{{ Request::path() == 'fspos' || Request::path() == 'smart-penkeep' || Request::path() == 'fsmarket' || Request::path() == 'fsmanager' ? 'active' : '' }}"> Products</span>

          <span class="ml-2 w-2 {{ Request::path() == 'fspos' || Request::path() == 'smart-penkeep' || Request::path() == 'fsmarket' || Request::path() == 'fsmanager' ? 'active' : '' }}">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="h-5 w-5">
              <path
                fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </a>
        <ul
          class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
          aria-labelledby="dropdownMenuButton1"
          data-te-dropdown-menu-ref>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('penkeep') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'smart-penkeep' ? 'active' : '' }}">Smart Penkeep</span> </a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('fsmanager') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'fsmanager' ? 'active' : '' }}">Fs Manager</span></a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('fsmarket') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'fsmarket' ? 'active' : '' }}">Fs Market</span></a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('fspos') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'fspos' ? 'active' : '' }}">Fs POS</span></a
            >
          </li>
        </ul>
      </div>
      <a href="{{ route('pricing') }}" class="hover:text-DeepRed {{ Request::path() == 'pricing' ? 'active' : '' }}">Pricing </a>

      <div class="relative cursor-pointer" data-te-dropdown-ref>
        <a
          class="flex items-center whitespace-nowrap"
          type="button"
          id="dropdownMenuButton1"
          data-te-dropdown-toggle-ref
          aria-expanded="false"
          data-te-ripple-init
          data-te-ripple-color="light">
          <span class="{{ Request::path() == 'events' || Request::path() == 'trainings' || Request::path() == 'price-today' || Request::path() == 'blog' ? 'active' : '' }}"> Learn & support</span>
          
          <span class="ml-2 w-2 {{ Request::path() == 'events' || Request::path() == 'trainings' || Request::path() == 'price-today' || Request::path() == 'blog' ? 'active' : '' }}">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="h-5 w-5">
              <path
                fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </a>
        <ul
          class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
          aria-labelledby="dropdownMenuButton1"
          data-te-dropdown-menu-ref>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('blog') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'blog' ? 'active' : '' }}">News</span></a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('events') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'events' ? 'active' : '' }}">Events</span></a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('price-today') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'price-today' ? 'active' : '' }}">Market Price</span></a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('trainings') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'trainings' ? 'active' : '' }}">Online Training</span></a
            >
          </li>
        </ul>
      </div>
      <a href="{{ route('contact') }}" class="hover:text-DeepRed {{ Request::path() == 'contact' ? 'active' : '' }}">Contact Us </a>
    </div>
    <!------  Button  ------------>
    <div class="flex items-center space-x-6 md:mr-20">
      <a href="https://www.farmspeak.net/fs_manager/v7/login/" class="hidden md:block p-3 px-7 border border-lightGreen pt-2 text-lightGreen bg-transparent rounded-full baseline hover:bg-lightGreen hover:text-white">Login</a>
      <a href="https://www.farmspeak.net/fs_manager/v7/register/" class="hidden md:block p-3 px-6 pt-2 text-white bg-lightGreen rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen">Get Started</a>
    </div>
    
    <!------   Hamburger Icon --------->
    <button class="block hamburger md:hidden focus:outline-none pr-10" id="menu-btn">
      <span class="hamburger-top"></span>
      <span class="hamburger-middle"></span>
      <span class="hamburger-bottom"></span>
    </button>
    </div>
    <!-----  Mobile Menu ------->
    <div class="md:hidden">
      <div id="menu" class="hidden absolute flex-col items-start pl-10 self-end py-8 mt-3 space-y-6 font-bold bg-white sm:self-center left-6 right-6 drop-shadow-md">
      <a href="#" class="hover:text-DeepRed {{ Request::path() == 'home' ? 'active' : '' }}">Home</a>
      <a href="{{ route('our-approach') }}" class="hover:text-DeepRed {{ Request::path() == 'our-approach' ? 'active' : '' }}">Our approach</a>
      <div class="relative cursor-pointer" data-te-dropdown-ref>
        <a
          class="flex items-center whitespace-nowrap"
          type="button"
          id="dropdownMenuButton1"
          data-te-dropdown-toggle-ref
          aria-expanded="false"
          data-te-ripple-init
          data-te-ripple-color="light">
          <span class="{{ Request::path() == 'fspos' || Request::path() == 'smart-penkeep' || Request::path() == 'fsmarket' || Request::path() == 'fsmanager' ? 'active' : '' }}"> Products</span>

          <span class="ml-2 w-2 {{ Request::path() == 'fspos' || Request::path() == 'smart-penkeep' || Request::path() == 'fsmarket' || Request::path() == 'fsmanager' ? 'active' : '' }}">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="h-5 w-5">
              <path
                fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </a>
        <ul
          class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
          aria-labelledby="dropdownMenuButton1"
          data-te-dropdown-menu-ref>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('penkeep') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'smart-penkeep' ? 'active' : '' }}">Smart Penkeep</span> </a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('fsmanager') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'fsmanager' ? 'active' : '' }}">Fs Manager</span></a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('fsmarket') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'fsmarket' ? 'active' : '' }}">Fs Market</span></a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('fspos') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'fspos' ? 'active' : '' }}">Fs POS</span></a
            >
          </li>
        </ul>
      </div>
      <a href="{{ route('pricing') }}" class="hover:text-DeepRed {{ Request::path() == 'pricing' ? 'active' : '' }}">Pricing </a>

      <div class="relative cursor-pointer" data-te-dropdown-ref>
        <a
          class="flex items-center whitespace-nowrap"
          type="button"
          id="dropdownMenuButton1"
          data-te-dropdown-toggle-ref
          aria-expanded="false"
          data-te-ripple-init
          data-te-ripple-color="light">
          <span class="{{ Request::path() == 'events' || Request::path() == 'trainings' || Request::path() == 'price-today' || Request::path() == 'blog' ? 'active' : '' }}"> Learn & support</span>
          
          <span class="ml-2 w-2 {{ Request::path() == 'events' || Request::path() == 'trainings' || Request::path() == 'price-today' || Request::path() == 'blog' ? 'active' : '' }}">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="h-5 w-5">
              <path
                fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </a>
        <ul
          class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
          aria-labelledby="dropdownMenuButton1"
          data-te-dropdown-menu-ref>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('blog') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'blog' ? 'active' : '' }}">News</span></a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('events') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'events' ? 'active' : '' }}">Events</span></a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('price-today') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'price-today' ? 'active' : '' }}">Market Price</span></a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-deepRed hover:text-DeepRed active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
              href="{{ route('trainings') }}"
              data-te-dropdown-item-ref
              ><span class="{{ Request::path() == 'trainings' ? 'active' : '' }}">Online Training</span></a
            >
          </li>
        </ul>
      </div>
      <a href="{{ route('contact') }}" class="hover:text-DeepRed {{ Request::path() == 'contact' ? 'active' : '' }}">Contact Us </a>
      <div class="flex flex-row items-center space-x-6 pt-5">
        <a href="#" class="md:block p-3 px-7 border border-lightGreen pt-2 text-lightGreen bg-transparent rounded-full baseline hover:bg-lightGreen hover:text-white">Login</a>
        <a href="#" class="md:block p-3 px-6 pt-2 text-white bg-lightGreen rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen">Get Started</a>
      </div>
      

      </div>
    </div>
    <!----- end of mobile menu  ------>
  </nav>