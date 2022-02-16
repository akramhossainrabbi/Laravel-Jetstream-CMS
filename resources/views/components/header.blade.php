<!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
<nav class="flex items-center justify-between flex-wrap bg-black py-3 lg:px-12 shadow border-solid border-t-2 border-blue-700">
    <div class="flex justify-between lg:w-auto w-full lg:border-b-0 pl-6 pr-2 border-solid border-b-2 border-gray-300 pb-5 lg:pb-0">
        <div class="flex items-center flex-shrink-0 text-gray-800 mr-16">
            {{-- <span class="font-semibold text-xl tracking-tight">My Navbar</span> --}}
            <a href="/">
              <img class="text-1xl font-bold uppercase text-purple-100" src="{{ asset('storage/images/3.png') }}" width="120" height="10" />
            </a>
        </div>
        <div class="block lg:hidden mt-2">
            <button id="nav" class="flex items-center px-3 py-2 border-2 rounded text-blue-700 border-blue-700 hover:text-blue-700 hover:border-blue-700" onclick="openNav()">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="menu w-full flex-grow hidden lg:flex lg:items-center lg:w-auto lg:px-3 px-8">
        <div class="flex text-md font-bold text-blue-700 lg:flex-grow">
            <a href="#responsive-header"
                class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 px-4 py-2 rounded mr-2">
                Browse Fundraising
            </a>
            <div x-data="{ open: false }" class="relative" @click.away="open = false">
                <button @click="open = !open" class="flex flex-row mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 px-4 py-2 rounded mr-2 font-bold">
                  <span>Fundrise For</span>
                  <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-0 font-bold"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute left-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right z-10">
                  <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark:bg-gray-700">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                      <a class="flex row items-start rounded-lg bg-transparent p-2 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                        <div class="bg-teal-500 text-white rounded-lg p-3">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        </div>
                        <div class="ml-3">
                          <p class="font-semibold">Appearance</p>
                          <p class="text-sm">Easy customization</p>
                        </div>
                      </a>
      
                      <a class="flex row items-start rounded-lg bg-transparent p-2 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                        <div class="bg-teal-500 text-white rounded-lg p-3">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        </div>
                        <div class="ml-3">
                          <p class="font-semibold">Comments</p>
                          <p class="text-sm">Check your latest comments</p>
                        </div>
                      </a>
      
                      <a class="flex row items-start rounded-lg bg-transparent p-2 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                        <div class="bg-teal-500 text-white rounded-lg p-3">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                        </div>
                        <div class="ml-3">
                          <p class="font-semibold">Analytics</p>
                          <p class="text-sm">Take a look at your statistics</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
            <a href="{{ route('about') }}"
                class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-300 px-4 py-2 rounded mr-2">
                About Us
            </a>
        </div>
        <!-- This is an example component -->
        <div class="relative mx-auto text-gray-600 lg:block hidden">
            <input
                class="border-2 border-gray-300 bg-white h-10 pl-2 pr-8 rounded-lg text-sm focus:outline-none"
                type="search" name="search" placeholder="Search">
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-2">
                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve"
                        width="512px" height="512px">
            <path
                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
            </svg>
            </button>
        </div>
        <div class="flex ">
        @if (Route::has('login'))
            @auth
              @if(auth()->user()->roles()->first()->name == 'admin')
              <a href="{{ route('admin.dashboard') }}" class="block border-double border-4 border-light-blue-500 text-md px-4 py-2 rounded text-white ml-2 font-bold hover:text-gray-400 mt-4 lg:mt-0">Dashboard</a>
              @else
              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();" class="block border-double border-4 border-light-blue-500 text-md px-4 py-2 rounded text-white ml-2 font-bold hover:text-gray-400 mt-4 lg:mt-0">
                    {{ __('LogOut') }}
                </a>
              </form>
              @endif
            @else
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="block border-double border-4 border-light-blue-500 text-md px-4 py-2 rounded text-white ml-2 font-bold hover:text-gray-400 mt-4 lg:mt-0">Start a Fundriser</a>
                @endif

                <a href="{{ route('login') }}" class="block border-double border-4 border-light-blue-500 text-md px-4 py-2 rounded text-white ml-2 font-bold hover:text-gray-400 mt-4 lg:mt-0">Login</a>
            @endauth
        @endif
        </div>
    </div>

    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div class="flex flex-row mt-4 lg:inline-block lg:mt-0 px-4 py-2 rounded mr-2 font-bold">
          <a href="/" class="pl-4 text-gray-800 text-xl">Home</a>
        </div>
        <div class="flex flex-row mt-4 lg:inline-block lg:mt-0 px-4 py-2 rounded mr-2 font-bold">
          <a href="#" class="pl-4 text-gray-800 text-xl">Browse Fundraising</a>
        </div>
        <div x-data="{ open: false }" class="relative" @click.away="open = false">
          <button @click="open = !open" class="flex flex-row mt-4 lg:inline-block lg:mt-0 px-4 py-2 rounded mr-2 font-bold">
            <span class="pl-4 text-gray-800 text-xl">Fundrise For</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-5 h-5 mt-1 ml-1 transition-transform duration-200 transform md:-mt-0 font-bold text-gray-800"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute left-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right px-3 z-10">
            <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark:bg-gray-700">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <a class="flex row items-start rounded-lg bg-transparent p-2 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                  <div class="bg-teal-500 rounded-lg p-3">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                  </div>
                  <div class="ml-3">
                    <p class="font-semibold">Appearance</p>
                    <p class="text-sm">Easy customization</p>
                  </div>
                </a>

                <a class="flex row items-start rounded-lg bg-transparent p-2 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                  <div class="bg-teal-500 rounded-lg p-3">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                  </div>
                  <div class="ml-3">
                    <p class="font-semibold">Comments</p>
                    <p class="text-sm">Check your latest comments</p>
                  </div>
                </a>

                <a class="flex row items-start rounded-lg bg-transparent p-2 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                  <div class="bg-teal-500 rounded-lg p-3">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                  </div>
                  <div class="ml-3">
                    <p class="font-semibold">Analytics</p>
                    <p class="text-sm">Take a look at your statistics</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
      </div>
      <div class="flex flex-row mt-4 lg:inline-block lg:mt-0 px-4 py-2 rounded mr-2 font-bold">
        <a href="{{ route('about') }}" class="pl-4 text-gray-800 text-xl">About Us</a>
      </div>
      <div class="text-center">
        @if (Route::has('login'))
            @auth
              @if(auth()->user()->roles()->first()->name == 'admin')
              <a href="{{ route('admin.dashboard') }}" class="block border-double border-4 border-light-blue-500 text-md px-4 py-2 rounded mr-2 ml-2 font-bold hover:text-gray-400 mt-4 lg:mt-0">Dashboard</a>
              @else
              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();" class="block border-double border-4 border-light-blue-500 text-md px-4 py-2 rounded mr-2 ml-2 font-bold hover:text-gray-400 mt-4 lg:mt-0">
                    {{ __('LogOut') }}
                </a>
              </form>
              @endif
            @else
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="block border-double border-4 border-light-blue-500 text-md px-4 py-2 rounded mr-2 ml-2 font-bold hover:text-gray-400 mt-4 lg:mt-0">Start a Fundriser</a>
                @endif

                <a href="{{ route('login') }}" class="block border-double border-4 border-light-blue-500 text-md px-4 py-2 rounded mr-2 ml-2 font-bold hover:text-gray-400 mt-4 lg:mt-0">Login</a>
            @endauth
        @endif
      </div>
    </div>
</nav>