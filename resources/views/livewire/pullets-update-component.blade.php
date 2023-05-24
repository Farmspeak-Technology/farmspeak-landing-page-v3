<div wire:ignore.self>
     <x-navBar/>

     <section wire:ignore.self>
        <div class="container mx-auto max-w-xl flex flex-col py-32 space-y-12 px-10" wire:ignore.self>
            <h3 class="text-[#606060] text-xl font-bold text-center">Update Pullets(PX) for Today</h3>

            <form wire:submit.prevent="storePulletPrice">
                @csrf
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="AGRITED"
                    name="AGRITED"
                    wire:model="AGRITED"
                    placeholder="Enter AGRITED price" />
                    <label
                    for="AGRITED"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >AGRITED Price
                    </label>
                    @error('AGRITED')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="CHI"
                    name="CHI"
                    wire:model="CHI"
                    placeholder="Enter CHI price" />
                    <label
                    for="CHI"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >CHI Price
                    </label>
                    @error('CHI')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="ZARTECH"
                    name="ZARTECH"
                    wire:model="ZARTECH"
                    placeholder="Enter ZARTECH price" />
                    <label
                    for="ZARTECH"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >ZARTECH Price
                    </label>
                    @error('ZARTECH')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="SUPREME"
                    name="SUPREME"
                    wire:model="SUPREME"
                    placeholder="Enter SUPREME price" />
                    <label
                    for="SUPREME"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >SUPREME Price
                    </label>
                    @error('SUPREME')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="text"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="CROWN"
                    name="CROWN"
                    wire:model="CROWN"
                    placeholder="Enter CROWN price" />
                    <label
                    for="CROWN"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >CROWN Price
                    </label>
                    @error('CROWN')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="STANDARD"
                    name="STANDARD"
                    wire:model="STANDARD"
                    placeholder="Enter STANDARD price" />
                    <label
                    for="STANDARD"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >STANDARD Price
                    </label>
                    @error('STANDARD')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

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
                    id="FIDAN"
                    name="FIDAN"
                    wire:model="FIDAN"
                    placeholder="Enter FIDAN price" />
                    <label
                    for="FIDAN"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >FIDAN Price
                    </label>
                    @error('FIDAN')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="FARM_SUPPORT"
                    name="FARM_SUPPORT"
                    wire:model="FARM_SUPPORT"
                    placeholder="Enter FARM SUPPORT price" />
                    <label
                    for="FARM-SUPPORT"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >FARM SUPPORT Price
                    </label>
                    @error('FARM_SUPPORT')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="BLACK_PULLET"
                    name="BLACK_PULLET"
                    wire:model="BLACK_PULLET"
                    placeholder="Enter BLACK PULLET price" />
                    <label
                    for="BLACK_PULLET"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >BLACK PULLET Price
                    </label>
                    @error('BLACK_PULLET')
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
                    
                    <button type="submits" class="md:block p-3 px-6 pt-2 text-white bg-DeepGreen rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen font-bold"> Enter Next Price</button>
                </div>

            </form>
        </div>
     </section>

    <x-footer/>
</div>
