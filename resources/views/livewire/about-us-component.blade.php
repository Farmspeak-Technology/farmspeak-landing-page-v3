<div>
        <x-navBar/>
    <header class="pt-20">
  <!-- Navigation bar -->

  <!-- Hero section with background image, heading, subheading and button -->
  <div
    class="relative overflow-hidden bg-cover bg-no-repeat"
    style="
      background-position: calc(60% + 0px) top;
      background-image: url({{ asset('assets/img/bg-about-us.svg') }}); 
      height: 300px;
    ">
    <div
      class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed">
      <div class="flex h-full ">
        <div class="px-6 pt-20  text-white md:px-12">
          <h1 class="mb-6 text-4xl md:text-5xl font-bold  max-w-4xl leading-[1.2] ">Without a good <span class="text-[#F4C402]">plan</span> even the best team can’t score </h1>
        </div>
      </div>
    </div>
  </div>
</header>

<section>
    <div class="container max-w-6xl  flex flex-col mx-auto mt-20">
        <h3 class="text-3xl text-DeepGreen font-bold ml-10 md:mx-0">About Us </h3>
        <p class="text-[#606060] pt-5 text-lg  mx-10 md:mx-0">By Farmspeak Technology is an agritech company committed to eliminating extreme poverty amongst African farmers by increasing productivity, promoting efficient resources use and enhancing farm profitability. </p>
        <P class="text-[#606060] pt-5 text-lg  mx-10 md:mx-0">We are leveraging advanced technologies such as intelligent electronic sensors, internet of things (IoT), data analytics, and artificial intelligence to drive data-driven agriculture that reduces wastage and improve overall farm productivity. Our current focus is bringing these innovations and solutions to the African poultry market.</P>
        <P class="text-[#606060] pt-5 text-lg  mx-10 md:mx-0">Our products are uniquely tailored to meet the needs of poultry farmers – from digitizing their operations, to monitoring their pens and farm with smart devices.</P>
        <P class="text-[#606060] pt-5 text-lg  mx-10 md:mx-0">This helps farmers to produce more healthy birds, which results in increased food security, reduced hunger, and better local economies for Africa.</P>

    </div>
</section>

<section class="bg-DeepGreen mt-14">
    <div class="container max-w-6xl  flex flex-col mx-auto py-10 ">
        <h3 class="text-3xl text-deepYellow font-bold ml-10 md:mx-0">Our Vision </h3>
        <p class="text-deepYellow pt-5 text-lg  mx-10 md:mx-0">To provide farmers anywhere, anytime with cutting-edge products and services to increase productivity and profitability.</p>
        

    </div>
</section>

<section>
    <div class="container max-w-6xl  flex flex-col mx-auto mt-14">
        <h3 class="text-3xl text-DeepGreen font-bold ml-10 md:mx-0">Mission </h3>
        <p class="text-[#606060] pt-5 text-lg  mx-10 md:mx-0">To develop smart hardware, software and services that empower farmers to perform their intrinsic duty with pride and satisfaction.<br><br>
        At Farmspeak Technology, we are focused on serving the following segments of customers:</p><br>
        
        <div class="flex flex-row py-3 md:pt-0 items-start space-x-0 pl-2">
            <li class="text-[#606060]"></li>
            <p class="text-[17px] text-[#606060] md:w-full">Farmers: When farmers acquire our PenKeep device, we provide valuable analytics to help them turn farming into a business. They use fsManager to improve record keeping while fsPrices ensures they have better ideas on the prices of poultry products in major cities around them to help them bargain better with middlemen and merchants.</p>       
        </div>

        <div class="flex flex-row py-3 md:pt-0 items-start space-x-0 pl-2">
            <li class="text-[#606060]"></li>
            <p class="text-[17px] text-[#606060]  md:w-full">Investors: Our fsInsight Pro is engineered to help people who want to invest in agriculture have confidence doing so through independent hard data, which they can rely upon. Combining these data, the investor will understand their risks.</p>       
        </div>

        <div class="flex flex-row py-3 md:pt-0 items-start space-x-0 pl-2">
            <li class="text-[#606060]"></li>
            <p class="text-[17px] text-[#606060] md:w-full">Commodity Traders: We generate hard data, which can help predict agriculture yield across regions. They have access to temperature, humidity, air quality, rainfall, pest and disease outbreaks etc.</p>       
        </div>

        <div class="flex flex-row py-3 md:pt-0 items-start space-x-0 pl-2">
            <li class="text-[#606060]"></li>
            <p class="text-[17px] text-[#606060] md:w-full">Merchants/Buyers: With fsMarkets, farmers make their products available for people to buy. They post when they plan to end a cycle and try to lock up sales ahead of time. This is supported with independent data from Farmspeak to ensure every trade happens as advertised.</p>       
        </div>

    </div>
</section>

<section class="bg-DeepGreen mt-14">
    <div class="container max-w-6xl  flex flex-col mx-auto py-10 ">
        <h3 class="text-3xl text-deepYellow font-bold ml-10 md:mx-0">Core Team </h3>
        <p class="text-deepYellow pt-5 text-lg  mx-10 md:mx-0">The core team consists of a motivated and unique mix of poultry and software professionals. The team has been working together for many years, often at other employers even before joining FarmSpeak. As a result, everyone is aware of their strengths and is able to work efficiently.</p>
        

    </div>
</section>

  <!-- Section: Design Block -->
  <section class="mb-14 text-gray-800 text-center">
    <h2 class="text-4xl font-bold mt-20 mb-12 text-DeepGreen">The Team</h2>

    <div class="container max-w-6xl mx-auto grid md:grid-cols-3 gap-x-6 lg:gap-x-12">
      <div class="mb-6 lg:mb-0 px-5 md:px-0">
        <div class="bg-white block rounded-lg shadow-lg">
          <div class="relative overflow-hidden bg-no-repeat bg-cover">
            <img src="{{ asset('assets/img/team/Peter.png') }}" class="w-full rounded-t-lg" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"></div>
            </a>
            <svg class="absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
              style="left: 0; bottom: 0">
              <path fill="#fff"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
              </path>
            </svg>
          </div>
          <div class="p-6">
            <h5 class="text-lg font-bold mb-1">Peter Okonmah</h5>
            <p class="text-gray-500 mb-4">CEO</p>
            <ul class="list-inside flex mx-auto justify-center"> 
              <a href="#!" class="px-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 text-blue-600">
                  <path fill="currentColor"
                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                </svg>
              </a>
            </ul>
          </div>
        </div>
      </div>

      <div class="mb-6 lg:mb-0 px-5 md:px-0">
        <div class="bg-white block rounded-lg shadow-lg">
          <div class="relative overflow-hidden bg-no-repeat bg-cover">
            <img src="{{ asset('assets/img/team/adaeze.png') }}" class="w-full rounded-t-lg" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"></div>
            </a>
            <svg class="absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
              style="left: 0; bottom: 0">
              <path fill="#fff"
                d="M0,96L48,128C96,160,192,224,288,240C384,256,480,224,576,213.3C672,203,768,213,864,202.7C960,192,1056,160,1152,128C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
              </path>
            </svg>
          </div>
          <div class="p-6">
            <h5 class="text-lg font-bold mb-1">Peter Okonmah</h5>
            <p class="text-gray-500 mb-4">CEO</p>
            <ul class="list-inside flex mx-auto justify-center">
              <a href="#!" class="px-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 text-blue-600">
                  <path fill="currentColor"
                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                </svg>
              </a>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="px-5 md:px-0">
        <div class="bg-white block rounded-lg shadow-lg">
          <div class="relative overflow-hidden bg-no-repeat bg-cover">
            <img src="{{ asset('assets/img/team/emmanuel.png') }}" class="w-full rounded-t-lg" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"></div>
            </a>
            <svg class="absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
              style="left: 0; bottom: 0">
              <path fill="#fff"
                d="M0,288L48,256C96,224,192,160,288,160C384,160,480,224,576,213.3C672,203,768,117,864,85.3C960,53,1056,75,1152,69.3C1248,64,1344,32,1392,16L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
              </path>
            </svg>
          </div>
          <div class="p-6">
            <h5 class="text-lg font-bold mb-1">Peter Okonmah</h5>
            <p class="text-gray-500 mb-4">CEO</p>
            <ul class="list-inside flex mx-auto justify-center">
             <a href="#!" class="px-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 text-blue-600">
                  <path fill="currentColor"
                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                </svg>
              </a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mb-14 text-gray-800 text-center">

    <div class="container max-w-6xl mx-auto grid md:grid-cols-3 gap-x-6 lg:gap-x-12">
      <div class="mb-6 lg:mb-0 px-5 md:px-0">
        <div class="bg-white block rounded-lg shadow-lg">
          <div class="relative overflow-hidden bg-no-repeat bg-cover">
            <img src="{{ asset('assets/img/team/bimbo.png') }}" class="w-full rounded-t-lg" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"></div>
            </a>
            <svg class="absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
              style="left: 0; bottom: 0">
              <path fill="#fff"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
              </path>
            </svg>
          </div>
          <div class="p-6">
            <h5 class="text-lg font-bold mb-1">Peter Okonmah</h5>
            <p class="text-gray-500 mb-4">CEO</p>
            <ul class="list-inside flex mx-auto justify-center"> 
              <a href="#!" class="px-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 text-blue-600">
                  <path fill="currentColor"
                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                </svg>
              </a>
            </ul>
          </div>
        </div>
      </div>

      <div class="mb-6 lg:mb-0 px-5 md:px-0">
        <div class="bg-white block rounded-lg shadow-lg">
          <div class="relative overflow-hidden bg-no-repeat bg-cover">
            <img src="{{ asset('assets/img/team/kindness.png') }}" class="w-full rounded-t-lg" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"></div>
            </a>
            <svg class="absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
              style="left: 0; bottom: 0">
              <path fill="#fff"
                d="M0,96L48,128C96,160,192,224,288,240C384,256,480,224,576,213.3C672,203,768,213,864,202.7C960,192,1056,160,1152,128C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
              </path>
            </svg>
          </div>
          <div class="p-6">
            <h5 class="text-lg font-bold mb-1">Peter Okonmah</h5>
            <p class="text-gray-500 mb-4">CEO</p>
            <ul class="list-inside flex mx-auto justify-center">
              <a href="#!" class="px-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 text-blue-600">
                  <path fill="currentColor"
                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                </svg>
              </a>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="px-5 md:px-0">
        <div class="bg-white block rounded-lg shadow-lg">
          <div class="relative overflow-hidden bg-no-repeat bg-cover">
            <img src="{{ asset('assets/img/team/adeniyi.png') }}" class="w-full rounded-t-lg" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"></div>
            </a>
            <svg class="absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
              style="left: 0; bottom: 0">
              <path fill="#fff"
                d="M0,288L48,256C96,224,192,160,288,160C384,160,480,224,576,213.3C672,203,768,117,864,85.3C960,53,1056,75,1152,69.3C1248,64,1344,32,1392,16L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
              </path>
            </svg>
          </div>
          <div class="p-6">
            <h5 class="text-lg font-bold mb-1">Peter Okonmah</h5>
            <p class="text-gray-500 mb-4">CEO</p>
            <ul class="list-inside flex mx-auto justify-center">
             <a href="#!" class="px-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 text-blue-600">
                  <path fill="currentColor"
                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                </svg>
              </a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mb-32 text-gray-800 text-center">

    <div class="container max-w-6xl mx-auto grid md:grid-cols-3 gap-x-6 lg:gap-x-12">
      <div class="mb-6 lg:mb-0 px-5 md:px-0">
        <div class="bg-white block rounded-lg shadow-lg">
          <div class="relative overflow-hidden bg-no-repeat bg-cover">
            <img src="{{ asset('assets/img/team/adaeze.png') }}" class="w-full rounded-t-lg" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"></div>
            </a>
            <svg class="absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
              style="left: 0; bottom: 0">
              <path fill="#fff"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
              </path>
            </svg>
          </div>
          <div class="p-6">
            <h5 class="text-lg font-bold mb-1">Peter Okonmah</h5>
            <p class="text-gray-500 mb-4">CEO</p>
            <ul class="list-inside flex mx-auto justify-center"> 
              <a href="#!" class="px-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 text-blue-600">
                  <path fill="currentColor"
                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                </svg>
              </a>
            </ul>
          </div>
        </div>
      </div>

      <div class="mb-6 lg:mb-0 px-5 md:px-0">
        <div class="bg-white block rounded-lg shadow-lg">
          <div class="relative overflow-hidden bg-no-repeat bg-cover">
            <img src="{{ asset('assets/img/team/Peter.png') }}" class="w-full rounded-t-lg" />
            <a href="#!">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"></div>
            </a>
            <svg class="absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
              style="left: 0; bottom: 0">
              <path fill="#fff"
                d="M0,96L48,128C96,160,192,224,288,240C384,256,480,224,576,213.3C672,203,768,213,864,202.7C960,192,1056,160,1152,128C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
              </path>
            </svg>
          </div>
          <div class="p-6">
            <h5 class="text-lg font-bold mb-1">Peter Okonmah</h5>
            <p class="text-gray-500 mb-4">CEO</p>
            <ul class="list-inside flex mx-auto justify-center">
              <a href="#!" class="px-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 text-blue-600">
                  <path fill="currentColor"
                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                </svg>
              </a>
            </ul>
          </div>
        </div>
      </div>
      
      
    </div>
  </section>
  <!-- Section: Design Block -->
<x-footer/> 
</div>
