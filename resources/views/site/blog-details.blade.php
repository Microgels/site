@extends('site.layouts.header')
@section('title', 'Microgels | Blog descriptions')
@section('style')
  pre {
  border-raduis : 5px;
  overflow-x:auto;
  }
@endsection
@section('body')
  <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white ">
    @if (session('success'))
      <small class="bg-green-300 text-dark font-medium p-2 rounded-md text-right absolute right-5">
        {{ session('success') }}
      </small>
    @endif
    <div class="w-full mx-auto px-4 sm:px-2 xl:px-0">
      <div class="flex flex-wrap">
        <div class="flex flex-wrap -mx-4 justify-evenly gap-20 lg:w-[70%]">
          <!-- Contenu à gauche -->
          <div class="article-content w-full lg:w-[70%] mt-10 min-h-full">
            <div class="px-4">
              <h2 class="mb-8 text-3xl font-bold leading-tight text-black sm:text-4xl sm:leading-tight"
                data-wow-delay="0s">
                {{ $post->title }}
              </h2>
              <div
                class="flex flex-wrap items-center justify-between pb-4 mb-10 border-b wow fadeInUp border-body-color/10 dark:border-white/10"
                data-wow-delay="0s">
                <div class="flex items-center justify-between w-full">
                  <div class="md:flex items-center justify-center mb-2">
                    <div class="mb-2 inline-flex items-center px-3">
                      <div class="mr-3 h-10 w-full max-w-[40px] rounded-full">
                        <img src="/storage/{{ $post->user->avatar }}" alt="author" ,loading="lazy"
                          class="h-full w-full rounded-full object-cover object-center" />
                      </div>
                      <p class="text-base font-medium text-body"> By {{ $post->user->name }} </p>
                    </div>
                    <p class="flex items-center text-body-color-2 dark:text-body-color">
                      <i class="bi bi-calendar4 text-2xl text-[#79808A] pr-3"></i>
                      {{ $post->created_at->format('d, M Y') }}
                    </p>
                    {{-- <div class="mb-2 inline-flex items-center px-3">
                      <p class="flex items-center text-base font-medium text-body">
                        <i class="bi bi-eye text-[#79808A] text-2xl pr-3"></i>
                        343
                      </p>
                    </div> --}}
                  </div>

                  <!-- Bouton/icone qui déclenche l'ouverture du modal -->
                  <div class="wow fadeInUp flex items-center text-center" data-wow-delay=".2s">
                    <p data-translate="Share this post" class="mb-4 text-base text-body sm:text-right">Share this post :</p>
                    <div class="flex items-center space-x-3 sm:justify-end">
                      <button id="openShareModal" aria-label="Open share modal" class="inline-flex h-10 w-10 items-center justify-center rounded-sm bg-[#F8FAFB]
                       text-sm font-semibold text-body hover:bg-primary cursor-pointer
                       dark:bg-[#15182A] dark:text-white dark:hover:bg-primary">

                        <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 
                  12.7a3.274 3.274 0 0 0 0-1.39l7.02-4.11A2.99 2.99
                  0 1 0 14 5a2.99 2.99 0 0 0 1.96.77l-7.02 4.11a3.001
                  3.001 0 1 0 0 4.24l7.02 4.11A2.99 2.99 0 1 0 18 16.08z" />
                        </svg>
                      </button>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div id="shareModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/50">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 max-w-md w-full mx-4 relative">
                      <!-- Close -->
                      <button id="closeShareModal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-800">
                        ✕
                      </button>

                      <h2 data-translate="Share this post" class="text-xl font-bold mb-4">Partager cet article</h2>

                      <div class="flex space-x-4 mb-6"> <a
                          href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->current() }}" name="social share"
                          aria-label="social share"
                          class="inline-flex h-9 w-9 items-center justify-center rounded bg-[#F8FAFB] text-sm font-semibold text-body ">
                          <svg width="40" height="40" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M15.8333 2.5C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333ZM15.4167 15.4167V11C15.4167 10.2795 15.1304 9.5885 14.621 9.07903C14.1115 8.56955 13.4205 8.28333 12.7 8.28333C11.9917 8.28333 11.1667 8.71667 10.7667 9.36667V8.44167H8.44167V15.4167H10.7667V11.3083C10.7667 10.6667 11.2833 10.1417 11.925 10.1417C12.2344 10.1417 12.5312 10.2646 12.75 10.4834C12.9688 10.7022 13.0917 10.9989 13.0917 11.3083V15.4167H15.4167ZM5.73333 7.13333C6.10464 7.13333 6.46073 6.98583 6.72328 6.72328C6.98583 6.46073 7.13333 6.10464 7.13333 5.73333C7.13333 4.95833 6.50833 4.325 5.73333 4.325C5.35982 4.325 5.0016 4.47338 4.73749 4.73749C4.47338 5.0016 4.325 5.35982 4.325 5.73333C4.325 6.50833 4.95833 7.13333 5.73333 7.13333ZM6.89167 15.4167V8.44167H4.58333V15.4167H6.89167Z"
                              fill="currentColor" />
                          </svg> </a> <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}" name="social share"
                          aria-label="social share"
                          class="inline-flex h-9 w-9 items-center justify-center rounded bg-[#F8FAFB] text-sm font-semibold text-body">
                          <svg width="40" height="40" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M18.7165 4.99992C18.0749 5.29159 17.3832 5.48325 16.6665 5.57492C17.3999 5.13325 17.9665 4.43325 18.2332 3.59159C17.5415 4.00825 16.7749 4.29992 15.9665 4.46659C15.3082 3.74992 14.3832 3.33325 13.3332 3.33325C11.3749 3.33325 9.77487 4.93325 9.77487 6.90825C9.77487 7.19159 9.8082 7.46659 9.86654 7.72492C6.89987 7.57492 4.2582 6.14992 2.49987 3.99159C2.19154 4.51659 2.01654 5.13325 2.01654 5.78325C2.01654 7.02492 2.64154 8.12492 3.6082 8.74992C3.01654 8.74992 2.46654 8.58325 1.9832 8.33325C1.9832 8.33325 1.9832 8.33325 1.9832 8.35825C1.9832 10.0916 3.21654 11.5416 4.84987 11.8666C4.54987 11.9499 4.2332 11.9916 3.9082 11.9916C3.6832 11.9916 3.4582 11.9666 3.24154 11.9249C3.69154 13.3333 4.99987 14.3833 6.57487 14.4083C5.3582 15.3749 3.81654 15.9416 2.1332 15.9416C1.84987 15.9416 1.56654 15.9249 1.2832 15.8916C2.86654 16.9083 4.74987 17.4999 6.76654 17.4999C13.3332 17.4999 16.9415 12.0499 16.9415 7.32492C16.9415 7.16659 16.9415 7.01658 16.9332 6.85825C17.6332 6.35825 18.2332 5.72492 18.7165 4.99992Z"
                              fill="currentColor" />
                          </svg> </a> <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" name="social share"
                          aria-label="social share"
                          class="inline-flex h-9 w-9 items-center justify-center rounded bg-[#F8FAFB] text-sm font-semibold text-body">
                          <svg width="40" height="40" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M9.99984 1.69995C5.4165 1.69995 1.6665 5.44162 1.6665 10.05C1.6665 14.2166 4.7165 17.6749 8.69984 18.2999V12.4666H6.58317V10.05H8.69984V8.20828C8.69984 6.11662 9.94151 4.96662 11.8498 4.96662C12.7582 4.96662 13.7082 5.12495 13.7082 5.12495V7.18328H12.6582C11.6248 7.18328 11.2998 7.82495 11.2998 8.48328V10.05H13.6165L13.2415 12.4666H11.2998V18.2999C13.2635 17.9898 15.0517 16.9879 16.3414 15.475C17.6312 13.9621 18.3376 12.038 18.3332 10.05C18.3332 5.44162 14.5832 1.69995 9.99984 1.69995Z"
                              fill="currentColor" />
                          </svg> </a> </div>

                      <div class="flex items-center space-x-2">
                        <input id="postLink" type="text" class="flex-1 border rounded p-2 text-sm" value="{{ url()->current() }}"
                          readonly>
                        <button data-translate="Copy" id="copyLinkBtn" class="bg-primary rounded px-4 py-2 hover:bg-primary/80">
                          Copier
                        </button> 
                      </div>

                      <p data-translate="Link copied !" id="copyMsg" class="text-green-600 text-sm mt-2 hidden">
                        Lien copié !
                      </p>
                    </div>
                  </div>


                </div>
              </div>
              <div class="w-full">
                <!-- <p
                              class="mb-10 text-base font-medium leading-relaxed text-gray-500 sm:text-lg sm:leading-relaxed lg:text-base lg:leading-relaxed xl:text-lg xl:leading-relaxed"
                              data-wow-delay="0s"
                            >
                              Duis aute irure dolor in reprehenderit in voluptate velit
                              esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                              occaecat cupidatat.
                            </p> -->
                <div class="w-full mb-10 overflow-hidden rounded-lg lg:h-[500px] h-96" data-wow-delay="0s">
                  <img src="/storage/{{ $post->avatar }}" alt="image" ,loading="lazy"
                    class="object-cover w-full rounded-lg h-full" />
                </div>
                <div
                  class="mb-8 text-base font-medium leading-relaxed text-gray-500 sm:text-lg sm:leading-relaxed lg:text-base lg:leading-relaxed xl:text-lg xl:leading-relaxed"
                  data-wow-delay="0s">
                  {!! $converter->convert($post->content)->getContent() !!}
                </div>


                <blockquote
                  class="wow fadeInUp relative z-10 mb-9 overflow-hidden rounded bg-[#F8FAFB] py-11 px-8 text-center text-base text-black dark:bg-[#15182A] dark:text-white md:px-12">
                  <div class="mx-auto w-full max-w-[550px]">
                    {{ $post->conclusion}}
                  </div>

                  <div class="absolute left-0 bottom-0 -z-10">
                    <svg width="65" height="68" viewBox="0 0 65 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M43.5018 91.5018C24.1708 110.833 -7.17083 110.833 -26.5018 91.5018C-45.8327 72.1708 -45.8327 40.8292 -26.5018 21.4982C-7.17083 2.16726 24.1708 2.16726 43.5018 21.4982C62.8327 40.8292 62.8327 72.1708 43.5018 91.5018Z"
                        stroke="url(#paint0_linear_58_157)" stroke-width="14" />
                      <defs>
                        <linearGradient id="paint0_linear_58_157" x1="-61.5836" y1="113" x2="78.5765" y2="15.4155"
                          gradientUnits="userSpaceOnUse">
                          <stop stop-color="#8EA5FE" />
                          <stop offset="0.541667" stop-color="#BEB3FD" />
                          <stop offset="1" stop-color="#90D1FF" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>

                  <div class="absolute top-0 right-0 -z-10">
                    <svg width="73" height="74" viewBox="0 0 73 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="56.5" cy="17.5" r="49.5" stroke="url(#paint0_linear_57_160)" stroke-width="14" />
                      <defs>
                        <linearGradient id="paint0_linear_57_160" x1="0" y1="-39" x2="133.592" y2="38.5086"
                          gradientUnits="userSpaceOnUse">
                          <stop stop-color="#FF8FE8" />
                          <stop offset="1" stop-color="#FFC960" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                </blockquote>

                <div class="-mx-3 flex flex-wrap">
                  <div class="w-full px-3 sm:w-7/12">
                    <div class="wow fadeInUp" data-wow-delay=".2s">
                      <p data-translate="Popular Tags" class="mb-4 text-base text-body">Popular Tags :</p>
                      <div class="flex flex-wrap items-center">
                        @forelse ($tags as $tag)
                          <a href="javascript:void(0)"
                            class="mr-3 mb-3 inline-flex h-9 items-center justify-center rounded bg-dark px-[18px] text-sm font-semibold text-body hover:bg-primary text-white dark:bg-[#15182A] dark:text-white dark:hover:bg-primary">
                            {{ $tag }}
                          </a>

                        @empty
                        @endforelse

                      </div>
                    </div>
                  </div>

                  <div class="w-full px-3 sm:w-5/12"></div>
                </div>
              </div>
            </div>

            <section class="bg-white py-8 lg:py-16 antialiased">
              {{-- post comments--}}
              <div class="max-w-2xl px-4">
                <div class="flex justify-between mb-6">
                  <h2  class="text-lg lg:text-2xl font-bold text-gray-900">
                    {{ $comments->count() }} comments
                  </h2>
                </div>
                <form class="mb-6" method="post" action="{{ route('blog.comment', ['slug' => $post->slug])}}">
                  @csrf
                  <div class="flex flex-col gap-5">
                    <div class="flex flex-col">
                      <label data-translate="Name" for="name" class="text-gray-500">Name</label>
                      <input type="text" id="name" name="name" class="p-3 border border-gray-400 w-full rounded-lg"
                        placeholder="Enter your name" />
                      @error('name')
                        <small class="text-red-500">
                          {{ $message }}
                        </small>
                      @enderror
                    </div>
                    <div class="flex flex-col">
                      <label data-translate="Email adress" for="name" class="text-gray-500">Adresse mail</label>
                      <input type="email" name="email" id="mail" class="p-3 border border-gray-400 w-full rounded-lg"
                        placeholder="Enter your mail adress" />
                      @error('email')
                        <small class="text-red-500">
                          {{ $message }}
                        </small>
                      @enderror
                    </div>
                    <div class="">
                      <label for="comment" data-translate="Your Comment" class="text-gray-500">Your comment</label>
                      <textarea id="comment" rows="6" name="content"
                        class="w-full text-gray-900 focus:ring-0 focus:outline-none py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-400"
                        placeholder="Write a comment..." required></textarea>

                      @error('content')
                        <small class="text-red-500">
                          {{ $message }}
                        </small>
                      @enderror
                    </div>
                  </div>
                  <button data-translate="Post Comment" type="submit"
                    class="inline-flex cursor-pointer items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-gray-900 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Post comment
                    <i class="bi bi-send-fill pl-4"></i>
                  </button>
                </form>
                <div class="flex flex-col gap-3">
                  @forelse ($post->comments as $comment)
                    <article class="p-6 text-base bg-slate-100 rounded-lg">
                      <div class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                          <p class="inline-flex items-center mr-3 text-sm text-gray-900 font-semibold">
                            {{ $comment->name }}
                          </p>
                          <p class="text-sm text-gray-600 dark:text-gray-400">
                            <time pubdate datetime="2022-02-08" title="February 8th, 2022">
                              {{ $comment->created_at->format("M. d, Y") }}</time>
                          </p>
                        </div>
                        {{-- <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                          class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900/15 dark:hover:bg-gray-700/10"
                          type="button">
                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 16 3">
                            <path
                              d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                          </svg>
                          <span class="sr-only">Comment settings</span>
                        </button> --}}
                        <!-- Dropdown menu -->
                        {{-- <div id="dropdownComment1"
                          class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                          <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownMenuIconHorizontalButton">
                            <li>
                              <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                            </li>
                            <li>
                              <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                            </li>
                            <li>
                              <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                            </li>
                          </ul>
                        </div> --}}
                      </div>
                      <p class="text-gray-500 dark:text-gray-400">
                        {{ $comment->content }}
                      </p>

                    </article>
                  @empty

                  @endforelse


                  {{-- <article class="p-6 text-base bg-slate-100 rounded-lg mt-2">
                    <div class="flex justify-between items-center mb-2">
                      <div class="flex items-center">
                        <p class="inline-flex items-center mr-3 text-sm text-gray-900 font-semibold">
                          <img class="mr-2 w-6 h-6 rounded-full" src="../img/1.jpeg" alt="Michael Gough" />Charles
                          Basilwango
                        </p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                          <time pubdate datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2025</time>
                        </p>
                      </div>
                      <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900/15 dark:hover:bg-gray-700/10"
                        type="button">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                          viewBox="0 0 16 3">
                          <path
                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                        </svg>
                        <span class="sr-only">Comment settings</span>
                      </button>
                      <!-- Dropdown menu -->
                      <div id="dropdownComment1"
                        class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                          aria-labelledby="dropdownMenuIconHorizontalButton">
                          <li>
                            <a href="#"
                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                          </li>
                          <li>
                            <a href="#"
                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                          </li>
                          <li>
                            <a href="#"
                              class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400">
                      Very straight-to-point article. Really worth time
                      reading. Thank you! But tools are just the instruments
                      for the UX
                    </p>

                  </article> --}}
                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- suggestion -->
        <div class="suggestion-section w-full lg:w-[25%] px-4">
          <div class="mb-10 rounded-md wow fadeInUp bg-[#f5fbff]" data-wow-delay="0s">
            <h3 data-translate="Related Posts" class="px-8 py-4 text-lg font-semibold text-black border-b border-gray-200">
              Related Posts
            </h3>
            <ul class="lg:p-8 p-2">
              @forelse ($related_posts as $related)
                <li class="pb-6 mb-6 border-b border-gray-200">
                  <div class="flex items-center lg:block xl:flex">
                    <div class="mr-5 h-[75px] w-full max-w-[85px] overflow-hidden rounded-md lg:mb-3 xl:mb-0">
                      <img src="/storage/{{ $related->avatar }}" alt="image" />
                    </div>
                    <div class="w-full">
                      <h5>
                        <a href="{{ route('blog.details', ['slug' => $related->slug]) }}"
                          class="mb-[6px] block text-base hover:text-[#a5b4fc] font-medium leading-snug text-black">
                          {{ $related->title }}
                        </a>
                      </h5>
                      <p class="text-xs font-medium text-slate-400">
                        {{ $related->created_at->format('d M, Y') }}
                      </p>
                    </div>
                  </div>
                </li>
              @empty
                <li>
                  No related posts
                </li>
              @endforelse
            </ul>
          </div>
          <div class="mb-10 rounded-md wow fadeInUp bg-[#f5fbff]" data-wow-delay="0s">
            <h3 data-translate="Popular Category" class="px-8 py-4 text-lg font-semibold text-black border-b border-gray-200">
              Popular Category
            </h3>
            <ul class="px-8 py-6">
              @forelse ($categories as $cat)
                <li>
                  <a href="javascript:void(0)" class="inline-block mb-3 text-base font-medium text-gray-400">
                    {{ $cat->name }}
                  </a>
                </li>
              @empty
                No Categories
              @endforelse
            </ul>
          </div>
          <div class="mb-10 rounded-md wow fadeInUp bg-[#f5fbff]" data-wow-delay="0s">
            <h3 data-translate="Popular Tags" class="px-8 py-4 text-lg font-semibold text-black border-b border-gray-200">
              Popular Tags
            </h3>
            <ul class="flex flex-wrap px-8 py-6">
              @forelse ($tags as $tag)
                <li>
                  <a href="javascript:void(0)"
                    class="text-body-color-3 mr-3 mb-3 inline-flex items-center justify-center rounded-full border-[.5px] py-2 px-4 hover:border-gray-200 hover:bg-[#a5b4fc]">
                    {{ $tag }}
                  </a>
                </li>
              @empty
                No tags
              @endforelse
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="{{ asset('js/index.js') }}"></script>
  <!-- prism -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
  <!-- Langages supplémentaires -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-javascript.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      Prism.highlightAll();
    });
    codes = document.querySelectorAll('pre')
    codes.forEach(element => {
      element.classList.add('rounded-lg', 'p-4', 'overflow-x-auto')
    });
  </script>
@endsection