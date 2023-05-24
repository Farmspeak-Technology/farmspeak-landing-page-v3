<div wire:ignore.self>
     <x-navBar/>

     <section wire:ignore.self>
        <div class="container mx-auto max-w-xl flex flex-col py-32 space-y-12 px-10" wire:ignore.self>

            @if (Session::has('message'))
                <div
                  class="mb-4 rounded-lg bg-success-100 px-6 py-5 text-base text-success-700"
                  role="alert">
                  {{ Session::get('message') }}
                </div>
                
              @endif

            <form wire:submit.prevent="storeBirdPrice">
                @csrf
                <h3 class="text-[#606060] text-xl font-bold text-center">Update Cockerel (CX) for Today</h3>
                <br>
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="WHITE_COCKEREL"
                    name="WHITE_COCKEREL"
                    wire:model="WHITE_COCKEREL"
                    placeholder="Enter WHITE COCKEREL price" />
                    <label
                    for="WHITE_COCKEREL"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >WHITE COCKEREL Price
                    </label>
                    @error('WHITE_COCKEREL')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="BLACK_COCKEREL"
                    name="BLACK_COCKEREL"
                    wire:model="BLACK_COCKEREL"
                    placeholder="Enter BLACK COCKEREL price" />
                    <label
                    for="BLACK_COCKEREL"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >BLACK COCKEREL Price
                    </label>
                    @error('BLACK_COCKEREL')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <br>
                <h3 class="text-[#606060] text-xl font-bold text-center">Update Noiler(NX) price for Today</h3>
                <br>
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="AMO"
                    name="AMO"
                    wire:model="AMO"
                    placeholder="Enter AMO price" />
                    <label
                    for="AMO"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >AMO Price
                    </label>
                    @error('AMO')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="PLAIN"
                    name="PLAIN"
                    wire:model="PLAIN"
                    placeholder="Enter PLAIN price" />
                    <label
                    for="PLAIN"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >PLAIN Price
                    </label>
                    @error('PLAIN')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="SASSO"
                    name="SASSO"
                    wire:model="SASSO"
                    placeholder="Enter SASSO price" />
                    <label
                    for="SASSO"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >SASSO Price
                    </label>
                    @error('SASSO')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="DUAL"
                    name="DUAL"
                    wire:model="DUAL"
                    placeholder="Enter DUAL price" />
                    <label
                    for="DUAL"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >DUAL Price
                    </label>
                    @error('DUAL')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <br>
                <h3 class="text-[#606060] text-xl font-bold text-center">Update Turkey Poults price for Today</h3>
                <br>

                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="LOCAL"
                    name="LOCAL"
                    wire:model="LOCAL"
                    placeholder="Enter LOCAL price" />
                    <label
                    for="LOCAL"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >LOCAL Price
                    </label>
                    @error('LOCAL')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="FOREIGN"
                    name="FOREIGN"
                    wire:model="FOREIGN"
                    placeholder="Enter FOREIGN price" />
                    <label
                    for="FOREIGN"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >FOREIGN Price
                    </label>
                    @error('FOREIGN')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="BRAHMA"
                    name="BRAHMA"
                    wire:model="BRAHMA"
                    placeholder="Enter BRAHMA price" />
                    <label
                    for="BRAHMA"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >BRAHMA Price
                    </label>
                    @error('BRAHMA')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="text"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="passcode"
                    name="passcode"
                    wire:model="passcode"
                    placeholder="Enter passcode price" />
                    <label
                    for="passcode"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Passcode
                    </label>
                    @error('passcode')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="flex flex-row items-center space-x-6 pt-5 pl-[30%]">
                    
                    <button type="submits" class="md:block p-3 px-6 pt-2 text-white bg-DeepGreen rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen font-bold"> Submit Price</button>
                </div>

            </form>
        </div>
     </section>

    <x-footer/>
</div>
