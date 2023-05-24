<div wire:ignore.self>
     <x-navBar/>

     <section>
        <div class="container mx-auto max-w-xl flex flex-col py-32 space-y-12 px-10">
            <h3 class="text-[#606060] text-xl font-bold text-center">Update Broiler(Bx) for Today</h3>

            <form wire:submit.prevent="storeBroilerPrice" wire:ignore>
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
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="NUBREED"
                    name="NUBREED"
                    wire:model="NUBREED"
                    placeholder="Enter NUBREED price" />
                    <label
                    for="NUBREED"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >NUBREED Price
                    </label>
                    @error('NUBREED')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="CASCADA"
                    name="CASCADA"
                    wire:model="CASCADA"
                    placeholder="Enter CASCADA price" />
                    <label
                    for="CASCADA"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >CASCADA Price
                    </label>
                    @error('CASCADA')
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
                    id="FUNTES"
                    name="FUNTES"
                    wire:model="FUNTES"
                    placeholder="Enter FUNTES price" />
                    <label
                    for="FUNTES"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >FUNTES Price
                    </label>
                    @error('FUNTES')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="VERTEX"
                    name="VERTEX"
                    wire:model="VERTEX"
                    placeholder="Enter VERTEX price" />
                    <label
                    for="VERTEX"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >VERTEX Price
                    </label>
                    @error('VERTEX')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="GS"
                    name="GS"
                    wire:model="GS"
                    placeholder="Enter GOLD SMILE price" />
                    <label
                    for="GS"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >GOLD SMILE Price
                    </label>
                    @error('GS')
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
                    id="SAYED"
                    name="SAYED"
                    wire:model="SAYED"
                    placeholder="Enter SAYED price" />
                    <label
                    for="SAYED"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >SAYED Price
                    </label>
                    @error('SAYED')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="VALENTINE"
                    name="VALENTINE"
                    wire:model="VALENTINE"
                    placeholder="Enter VALENTINE price" />
                    <label
                    for="VALENTINE"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >VALENTINE Price
                    </label>
                    @error('VALENTINE')
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
                    id="AJILA"
                    name="AJILA"
                    wire:model="AJILA"
                    placeholder="Enter AJILA price" />
                    <label
                    for="AJILA"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >AJILA Price
                    </label>
                    @error('AJILA')
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
                    id="DOY"
                    name="DOY"
                    wire:model="DOY"
                    placeholder="Enter DOY SUPER CHICKS price" />
                    <label
                    for="DOY"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >DOY SUPER CHICKS Price
                    </label>
                    @error('DOY')
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
                    
                    <button type="submit" class="md:block p-3 px-6 pt-2 text-white bg-DeepGreen rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen font-bold">Enter Next Price</button>
                </div>

            </form>
        </div>
     </section>

    <x-footer/>
</div>
