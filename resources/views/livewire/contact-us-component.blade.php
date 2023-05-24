<div>
  <style>
  .iti {
    width: 100%;
  }
  </style>
<x-navBar/>

<section style="background: rgba(170, 186, 172, 0.2);">
    <div class="container max-w-6xl mx-auto flex flex-col md:flex-row space-x-6 mt-32 py-24 px-7 md:px-0">
        <div class="flex flex-col space-y-6">
            <h3 class="text-[#606060] text-2xl">Reach us quickly</h3>

            <p class="max-w-xl text-lg text-[#606060]">Get in touch with us, we are just a call away or you can use the contact form or catch up for a coffee at our office.</p>

            

            <p class="max-w-xl text-lg text-[#606060]">FarmSpeak provides a poultry management solution to meet the needs of a poultry enterprise of any size.</p>

            <div class="flex flex-row items-center md:items-start space-x-3">
                <i class="mdi mdi-map-marker text-lg  text-[#606060]"></i>
                <p class="text-[#606060] md:max-w-sm "> Kobape Road, Beside President Muhammadu Buhari Estate, 110118, Kobape Abeokuta, Ogun State, Nigeria </p>
            </div>

            <div class="flex flex-row items-center md:items-start space-x-3">
                <i class="mdi mdi-phone text-lg  text-[#606060]"></i>
                <p class="text-[#606060] md:max-w-sm "> <a href="tel:+234816 765738">+(234) 816 765 738</a>  </p>
            </div>

            <div class="flex flex-row items-center md:items-start space-x-3">
                <i class="mdi mdi-email text-lg  text-[#606060]"></i>
                <p class="text-[#606060] md:max-w-sm "> <a href="mailto:support@farmspeak.net">support@farmspeak.net</a></p>
            </div>        
        </div>
     

        <hr class="hidden border-2 border-[#606060] border-dashed h-auto md:block" />

 
        <div class="flex flex-col space-y-6 md:pl-10">

            <h3 class="text-[#606060] text-2xl pt-10 md:pt-0">Send us a message</h3>

            @if (Session::has('message'))
                <p
                  class="mb-4 rounded-lg bg-success-100 px-6 py-5 text-base text-success-700"
                  role="alert">
                  {{ Session::get('message') }}
                </p>
                
              @endif

              @if (Session::has('error_msg'))
                <p
                  class="mb-4 rounded-lg !bg-red-500 px-6 py-5 text-base text-success-800"
                  role="alert">
                  {{ Session::get('error_msg') }}
                </p>
                
              @endif
              
              <form wire:submit.prevent="storeContact">
                @csrf

            <div class="flex flex-col md:flex-row md:space-x-6">
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="text"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="name"
                    wire:model="name"
                    placeholder="Enter Name" />
                    <label
                    for="name"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Name
                    </label>
                    @error('name')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="email"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="email"
                    wire:model="email"
                    placeholder="Enter Email " />
                    <label
                    for="Email"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Email 
                    </label>
                    @error('email')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div class="flex  flex-col md:flex-row md:space-x-6 ">
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="text"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 !-mr-8"
                    id="phone"
                    wire:model="phone"
                    placeholder="Enter Phone number " />
                    <label
                    for="phone"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >
                    </label>
                     @error('phone')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="text-red-500 alert-info" style="display: none"></p>
                    <p class="text-red-500 alert-error" style="display: none"></p>

                        <!--get the country details-->
                    <input id="phonefull" type="text" class="form-control "  
                                style="display: none;" value="" wire:model="country" wire:ignore>

                    
                </div>

                <div class=" mb-3">

                <select data-te-select-init class="!bg-white" wire:model="reason" wire:ignore>
                    <option class="bg-white">-- Select ---</option>
                    <option class="bg-white" value="Hardware Enquiries">Hardware Enquiries</option>
                    <option class="bg-white" value="Software Enquiries">Software Enquiries</option>
                    <option class="bg-white" value="Complaint">Complaint</option>
                    <option class="bg-white" value="Suggestion">Suggestion</option>
                    <option class="bg-white" value="Question">Question</option>
                    <option class="bg-white" value="Feedback">Feedback</option>
                </select>
                <label data-te-select-label-ref>Select Reason</label>
                 @error('reason')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                

            </div>

            <div class="relative mb-3" data-te-input-wrapper-init>
                <textarea
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none  [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="exampleFormControlTextarea1"
                    rows="3"
                    placeholder="Your message" wire:model="message"></textarea>
                <label
                    for="exampleFormControlTextarea1"
                    class="pointer-events-none absolute  left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none"
                    >Message</label>
                    @error('message')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-row items-center space-x-6 pt-5 pl-[30%]">
                    
                    <button type="submit" class="md:block p-3 px-6 pt-2 text-white bg-DeepGreen rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen">Send</button>
                </div>
              </form>
        </div>
    </div>


</section>

<x-footer/> 
 @push('scripts')

  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script>
  const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      allowExtensions: true,
      formatOnDisplay: true,
      autoFormat: true,
      autoHideDialCode: true,
      autoPlaceholder: true,
      initialCountry: "auto",
      geoIpLookup: getIp,
      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
    });

    const info = document.querySelector(".alert-info");
    const error = document.querySelector(".alert-error");

        // get the country data from the plugin
    var countryData = window.intlTelInputGlobals.getCountryData(),
      input = document.querySelector("#phone"),
      dialCodex = document.querySelector("#phonefull");
     var message = document.querySelector("#message");
     var name = document.querySelector("#name");
     var email = document.querySelector("#email");
     
    phoneInputField.addEventListener('change', function() {
      const phoneNumber = phoneInput.getNumber();

      info.style.display = "none";
      error.style.display = "none";

      const data = new URLSearchParams();
      data.append("phone", phoneNumber);

      fetch("https://bringofresh-4619.twil.io/lookup", {
          method: "POST",
          body: data,
        })
        .then((response) => response.json())
        .then((json) => {
          if (json.success) {
          dialCodex.value =  iti.getSelectedCountryData().name;

          } else {
            console.log(json.error);
            error.style.display = "";
            error.innerHTML = `Invalid phone number.`;
            dialCodex.value = '';
            input.value = '';
            input.placeholder = "eg +2347056358653";
          }
        })
        .catch((err) => {
          error.style.display = "";
          error.innerHTML = `Something went wrong: ${err}`;
        });
    });

    function getIp(callback) {
      fetch('https://ipinfo.io/json?token=ef8a0957bd9622', {
          headers: {
            'Accept': 'application/json'
          }
        })
        .then((resp) => resp.json())
        .catch(() => {
          return {
            country: 'ug',
          };
        })
        .then((resp) => callback(resp.country));
    }

    // init plugin
    var iti = window.intlTelInput(input, {
      allowExtensions: true,
      formatOnDisplay: true,
      autoFormat: true,
      autoHideDialCode: true,
      autoPlaceholder: true,
      initialCountry: "auto",
      geoIpLookup: getIp,
      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js"
    });

    phoneInputField.addEventListener('keyup', function() {
      dialCodex.value =  iti.getSelectedCountryData().name;
      input.value = phoneInput.getNumber();
       Livewire.emit('updateMyHiddenValue', dialCodex.value);
    });

    phoneInputField.addEventListener('change', function() {
      dialCodex.value =  iti.getSelectedCountryData().name;
      input.value = phoneInput.getNumber();
       Livewire.emit('updateMyHiddenValue', dialCodex.value);
    });

    message.addEventListener('change', function() {
      dialCodex.value =  iti.getSelectedCountryData().name;
      input.value = phoneInput.getNumber(); 
      Livewire.emit('updateMyHiddenValue', dialCodex.value);
    });

    name.addEventListener('change', function() {
      dialCodex.value =  iti.getSelectedCountryData().name;
      input.value = phoneInput.getNumber();
       Livewire.emit('updateMyHiddenValue', dialCodex.value);
    });

    email.addEventListener('change', function() {
      dialCodex.value =  iti.getSelectedCountryData().name;
      input.value = phoneInput.getNumber();
       Livewire.emit('updateMyHiddenValue', dialCodex.value);
    });

    

</script>


      
@endpush
</div>
