@extends('site.layouts.header')
@section('title', 'Microgels | Nos articles de blog')
@section('style')
@media (max-width: 1023px) {
    .blog-container {
      flex-direction: column;
    }
    .suggestion-section,
    .blogs-section {
      width: 100% !important;
    }
  }
  .prose pre {
    @apply rounded-lg p-4 overflow-x-auto;
  }
@endsection
@section('body')
    <section
      id="blog"
      class="pt-[110px] pb-[60px] flex flex-col justify-content-center items-center"
    >
      <div class="container mx-auto px-6">
        <div
          class="wow fadeInUp mx-auto mb-14 max-w-[690px] text-center lg:mb-[70px]"
          data-wow-delay=".2s"
        >
          <h2
            data-translate="Latest News & Blogs"
            class="mb-4 text-3xl font-bold text-black sm:text-4xl md:text-[44px] md:leading-tight"
          >
            Dernières nouvelles et blogs
          </h2>
          <p
            data-translate="Discover our articles, advice, and analyses on development, networks, cybersecurity, and much more."
            class="text-base text-body"
          >
            Découvrez nos articles, conseils et analyses sur le développement,
            les réseaux, la cybersécurité et bien plus encore.
          </p>

          <div class="flex flex-wrap justify-center gap-4 items-center my-15">
            <button
              class="rounded-full border py-2.5 px-4.5 font-medium ease-in duration-200 bg-gray-900 text-white"
            >
              <a href="{{ route('blogs') }}">
                All ({{ $all_posts->count() }})
              </a>
            </button>
            @forelse ($categories as $cat)
            <button
            class="rounded-full border py-2.5 px-4.5 font-medium ease-in duration-200 hover:bg-gray-900 bg-gray-50 borde border-gray-900 hover:text-white"
            >
              <a href="{{ route('blogs.catgories',['category'=>$cat->name]) }}">
                {{ $cat->name }} ({{ $all_posts->where('category.name',$cat->name)->count() }})
              </a>
            </button>
            @empty
                
            @endforelse
            
          </div>
        </div>
      </div>

      <div class="max-w-[75%] mx-auto px-4 sm:px-2 xl:px-0">
        <div class=" flex flex-wrap -mx-4">
          <!-- suggestion -->
          <div class="suggestion-section w-full lg:w-[30%] px-4">
          
            {{-- <div
              class="mb-10 rounded-md wow fadeInUp bg-[#f5fbff]"
              data-wow-delay="0s"
            >
              <h3
                class="px-8 py-4 text-lg font-semibold text-black border-b border-gray-200"
              >
                Related Posts
              </h3>
              <ul class="lg:p-8 p-2">
                <li class="pb-6 mb-6 border-b border-gray-200">
                  <div class="flex items-center lg:block xl:flex">
                    <div
                      class="mr-5 h-[75px] w-full max-w-[85px] overflow-hidden rounded-md lg:mb-3 xl:mb-0"
                    >
                      <img src="{{ asset('img/sign.jpeg') }}" alt="image" />
                    </div>
                    <div class="w-full">
                      <h5>
                        <a
                          href=""
                          class="mb-[6px] block text-base hover:text-[#a5b4fc] font-medium leading-snug text-black"
                        >
                          Best way to boost your online sales.
                        </a>
                      </h5>
                      <p class="text-xs font-medium text-slate-400">
                        20 Mar, 2024
                      </p>
                    </div>
                  </div>
                </li>
                <li class="pb-6 mb-6 border-b border-gray-200">
                  <div class="flex items-center lg:block xl:flex">
                    <div
                      class="mr-5 h-[75px] w-full max-w-[85px] overflow-hidden rounded-md lg:mb-3 xl:mb-0"
                    >
                      <img src="{{ asset('img/sign.jpeg') }}" alt="image" />
                    </div>
                    <div class="w-full">
                      <h5>
                        <a
                          href="javascript:void(0)"
                          class="mb-[6px] block text-base hover:text-[#a5b4fc] font-medium leading-snug text-black"
                        >
                          50 Best web design tips & tricks that will help you.
                        </a>
                      </h5>
                      <p class="text-xs font-medium text-gray-500">
                        15 Feb, 2024
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="flex items-center lg:block xl:flex">
                    <div
                      class="mr-5 h-[75px] w-full max-w-[85px] overflow-hidden rounded-md lg:mb-3 xl:mb-0"
                    >
                      <img src="{{ asset('img/sign.jpeg') }}" alt="image" />
                    </div>
                    <div class="w-full">
                      <h5>
                        <a
                          href="javascript:void(0)"
                          class="mb-[6px] block text-base hover:text-[#a5b4fc] font-medium leading-snug text-black"
                        >
                          The 8 best landing page builders, reviewed
                        </a>
                      </h5>
                      <p class="text-xs font-medium text-gray-500">
                        05 Jan, 2024
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div> --}}
            <div
              class="mb-10 rounded-md wow fadeInUp bg-[#f5fbff]"
              data-wow-delay="0s"
            >
              <h3
                class="px-8 py-4 text-lg font-semibold text-black border-b border-gray-200"
              >
                Popular Category
              </h3>
              <ul class="px-8 py-6">
              @forelse ($categories as $cat)
              <li>
                <a
                  href="{{ route('blogs.catgories',['category'=>$cat->name]) }}"
                  class="inline-block mb-3 text-base font-medium text-gray-400"
                >
                  {{ $cat->name }}
                </a>
              </li>
              @empty
              <li>
                <a
                  href="javascript:void(0)"
                  class="inline-block mb-3 text-base font-medium text-gray-400"
                >
                  No categories
                </a>
              </li>
              @endforelse
              </ul>
            </div>
            <div
              class="mb-10 rounded-md wow fadeInUp bg-[#f5fbff]"
              data-wow-delay="0s"
            >
              <h3
                class="px-8 py-4 text-lg font-semibold text-black border-b border-gray-200"
              >
                Popular Tags
              </h3>
              <ul class="flex flex-wrap px-8 py-6">
                @forelse ($tags as $tag)
                <li>
                  <a
                    href=""
                    class="text-body-color-3 mr-3 mb-3 inline-flex items-center justify-center rounded-full border-[.5px] py-2 px-4 hover:border-gray-200 hover:bg-[#a5b4fc]"
                  >
                    {{ $tag }}
                  </a>
                </li> 
                @empty
                  No tags
                @endforelse
              </ul>
            </div>
          </div>

          <!-- blog items -->
          <div class="blogs-section w-full lg:w-[70%] px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-7.5">
              <!-- blog item -->
              @forelse ($posts as $post)
              <div class="group">
                <div
                  class="mb-6 overflow-hidden rounded-[10px] transition-all group-hover:scale-105"
                >
                  <a href=" {{ route('blog.details',['slug'=>$post->slug]) }} ">
                    <img
                      src="/storage/{{ $post->avatar }}"
                      alt="post_image"
                      class="w-full h-44 object-cover object-center"
                    />
                  </a>
                </div>

                <h4>
                  <a
                    href="{{ route('blog.details',['slug'=>$post->slug]) }}"
                    class="block text-dark font-bold text-xl mb-3.5"
                  >
                    <span
                      class="bg-linear-to-r from-primary/50 to-primary/40 bg-[length:0px_10px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_10px]"
                    >
                      {{ $post->title }}
                    </span>
                  </a>
                </h4>
                
                <div class="paragraphs">
                  {!! $converter->convert($post->content)->getContent() !!}
                </div>

                <div
                  class="flex flex-wrap gap-3 items-center justify-between mt-4.5"
                >
                  <div class="flex items-center gap-2.5">
                    <a href="" class="flex items-center gap-3">
                      <div class="flex w-6 h-6 rounded-full overflow-hidden">
                        <img src="/storage/{{ $post->user->avatar}}" alt="user"  class="h-full w-full rounded-full object-cover object-center"/>
                      </div>
                      <p class="text-sm"> {{ $post->user->name.$post->user->lastname}} </p>
                    </a>

                    <span
                      class="flex w-[3px] h-[3px] rounded-full bg-dark-2"
                    ></span>

                    <p class="text-sm"> {{ $post->created_at->format('M d, Y') }}</p>
                  </div>
                  <a
                    href="#"
                    class="inline-flex text-[#a5b4fc] bg-[#3758f90d] font-medium text-sm py-1 px-3 rounded-full"
                    >{{$post->category->name}}</a
                  >
                </div>
              </div>
              @empty
                  No content
              @endforelse
            </div>
            <div>
              {{-- <button
                class="flex justify-center font-medium text-gray-900 border border-gray-900 rounded-md py-3 px-7.5 hover:bg-gray-900 hover:text-white ease-in duration-200 mx-auto mt-12.5 lg:mt-17.5"
              >
                Browse all posts
              </button> --}}
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- prism -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    <!-- Langages supplémentaires -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-javascript.min.js"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
          Prism.highlightAll();
      });
    </script>
    <script src="{{ asset('js/index.js') }}"></script>
@endsection
