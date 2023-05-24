<div wire:ignore.self>
     <x-navBar/>

     <section wire:ignore.self>
        <div class="container mx-auto max-w-xl flex flex-col py-32 space-y-12 px-10" wire:ignore.self>
            <h3 class="text-[#606060] text-2xl font-bold text-center">Update Blog</h3>

            @if (Session::has('message'))
                <div
                  class="mb-4 rounded-lg bg-success-100 px-6 py-5 text-base text-success-700"
                  role="alert">
                  {{ Session::get('message') }}
                </div>
                
              @endif


            <form wire:submit.prevent="storeBlogUpdate">
                @csrf
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="text"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="topic"
                    name="topic"
                    wire:model="topic"
                    placeholder="Enter Topic " required />
                    <label
                    for="topic"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Topic
                    </label>
                    @error('topic')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="text"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="blog_link"
                    name="blog_link"
                    wire:model="blog_link"
                    placeholder="Enter Blog Link " required />
                    <label
                    for="blog_link"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Blog Link
                    </label>
                    @error('blog_link')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3" data-te-input-wrapper-init>
                    <input
                    type="number"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-DeepGreen data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none   dark:peer-focus:text-DeepGreen [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="read_time
                    name="read_time"
                    wire:model="read_time"
                    placeholder="read_time" required />
                    <label
                    for="read_time"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Read Time
                    </label>
                    @error('read_time')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div
                    class="relative mb-3"
                    data-te-datepicker-init
                    data-te-input-wrapper-init>
                    <input
                    id="published_date"
                        type="text"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        wire:model='published_date'
                        placeholder="Published date" required />
                    <label
                        for="published_date"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                        >Select a date</label
                    >
                    @error('published_date')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative mb-3">
                    <select data-te-select-init name="sub_category" wire:model="sub_category" required>
                        <option>--Select Category--</option>
                        <option value="Company Updates">Company Updates</option>
                        <option value="Taste of Farmspeak">Taste of Farmspeak</option>
                        <option value="How we made it">How we made it</option>
                        <option value="Poultry Production">Poultry Production</option>
                    </select>
                    <label data-te-select-label-ref>Sub Category</label>
                    @error('sub_category')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                <label
                    for="formFile"
                    class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                    >Blog Image</label
                >
                <input
                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                    type="file"
                    wire:model="image"
                    id="formFile" required />

                    @error('image')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" data-te-input-wrapper-init>
                    <textarea
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="short_description"
                        rows="3"
                        wire:model="short_description"
                        placeholder="Short Description" maxlength="150" required></textarea>
                    <label
                        for="short_description"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                        >Short description</label
                    >
                    <p class="text-red-600">Characters remaining: {{ 155 - strlen($short_description) }}</p>
                    @error('short_description')
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
                    placeholder="Enter passcode price" required/>
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
                    
                    <button type="submits" class="md:block p-3 px-6 pt-2 text-white bg-DeepGreen rounded-full baseline hover:bg-deepYellow hover:text-DeepGreen font-bold"> Submit Blog Update</button>
                </div>

            </form>
        </div>
     </section>

    <x-footer/>
</div>
