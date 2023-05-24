<div>
<x-navBar/>


  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800 text-start">
    <h2 class="container max-w-6xl mx-auto text-2xl font-semibold text-[#606060] text-start px-7 md:px-0 pt-28 pb-10">Company Updates </h2>
    <div class="container max-w-6xl mx-auto grid lg:grid-cols-3 gap-6 xl:gap-x-12">
      @foreach ($posts as $post)
      @if ($post->sub_category ==='Company Updates')
        
      
    <!--- Start of one Blog---->
      <div class="mb-6 lg:mb-0 px-7 md:px-0">
        <div>
          <div
            class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
            data-mdb-ripple="true" data-mdb-ripple-color="light">
            
              <img src="{{asset('assets/img/blog')}}/{{ $post->image }}" 
              class="w-full" alt="{{ $post->topic }}" />
            <a href="{{ $post->blog_link }}">
              <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                style="background-color: rgba(251, 251, 251, 0.2)"></div>
            </a>
          </div>
          <div class="mb-3 text-red-600 font-medium text-sm flex items-start justify-start">{{ $post->sub_category }} 
          </div>
          <a href="{{ $post->blog_link }}"><h5 class="text-lg font-bold mb-3">{{ $post->topic }}</h5></a>
          
          
          <p class="text-gray-500">
            {{ $post->short_description }}
          </p>
        </div>
        <div class="flex flex-row justify-between pt-3">
            <p>{{ $post->created_at->format('M d Y') }}</p>
            <p>Read Time: <span class="text-[#FF4F4A]">{{ $post->read_time }} mins</span> </p>

        </div>
      </div>
      <!--- End of one Blog---->
      @endif
      @endforeach

     

    </div>

  </section>
  <!-- Section: Design Block -->

<x-footer/> 
</div>
