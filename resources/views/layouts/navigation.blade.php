
<nav class="bg-blue-900 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <!-- Logo -->
        {{-- <div class="flex-shrink-0 flex items-center">
            <a href="../../img/logo.jpg" class="relative">
              <svg class="animate-spin-slow h-8 w-8 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6 10a4 4 0 118 0 4 4 0 01-8 0zm2 0a2 2 0 114 0 2 2 0 01-4 0z" clip-rule="evenodd" />
                <path d="M10 2a8 8 0 100 16 8 8 0 000-16zM8 12a1 1 0 000 2h4a1 1 0 000-2H8z" />
              </svg>
            </a>
          </div> --}}
        <div class="flex-shrink-0 flex items-center">
          <a href="#">
            <img class="block lg:hidden h-8 w-auto" src="{{url('/images/logo.png')}}" alt="Logo">
            <img class="hidden lg:block h-8 w-auto" src="{{url('/images/logo.png')}}" alt="Logo">
          </a>
        </div>
  
        <!-- Menu -->
        <div class="flex items-center">
          <div class="hidden md:block">
            <a href="{{ url('/') }}" class="text-white hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Home</a>
            <!-- <a href="#" class="text-white hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">About</a>
            <a href="#" class="text-white hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Contact</a> -->
          </div>
          <div class="md:hidden ">
            <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="Toggle menu">
              <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                <path fill-rule="evenodd" d="M3 6h18v2H3V6zm0 5h18v2H3v-2zm0 5h18v2H3v-2z"></path>
              </svg>
            </button>
          </div>
        </div>
  
        <!-- Search Bar -->
        <div class="hidden md:flex items-center mt-3">  
        <form action="{{ route('posts.search') }}" method="GET">
          <input type="text" name="query" placeholder="Search..." class="bg-gray-100 border-2 border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:bg-white focus:border-purple-500" >
            <!-- <button type="submit">Search</button> -->
        </form>  
      </div>
    


  
        <!-- Authentication -->





<!-- component -->
 <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


<div class="flex justify-center h-screen">
    <div x-data="{ dropdownOpen: false }" class="relative mt-4">
        <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
            <svg class="h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
            </svg>
        </button>

       <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

        <div x-show="dropdownOpen" class="absolute right-0 mt-2 bg-white rounded-md shadow-lg overflow-hidden z-20" style="width:20rem;">
            <div class="py-2">
                <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Sara Salah</span> replied on the <span class="font-bold text-blue-500" href="#">Upload Image</span> artical . 2m
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span class="font-bold text-blue-500" href="#">Test with TDD</span> artical . 1h
                    </p>
                </a>
                <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100 -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=398&q=80" alt="avatar">
                    <p class="text-gray-600 text-sm mx-2">
                        <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                    </p>
                </a>
            </div>
            <a href="#" class="block bg-gray-800 text-white text-center font-bold py-2">See all notifications</a>
        </div>
    </div>
</div>













        <!-- Authentication -->
<div class="flex  items-center">
    <div class="hidden md:block">
        @auth
        <div class="flex  items-center">
        <x-dropdown-link :href="route('profile.edit')" class="text-white hover:text-gray-900 px-4 py-2 cursor-pointer">
           <div> Hi, {{ Auth::user()->name }}! </div>
        </x-dropdown-link>
        <form method="POST" action="{{ route('logout') }}" >
            @csrf
            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();" class="text-white whitespace-no-wrap mt-2 hover:text-gray-900 px-4 py-2 cursor-pointer bg-purple-500 rounded-md hover:bg-purple-600 focus:outline-none focus:bg-purple-600">
                {{ __('Log Out') }}
        </x-dropdown-link>
        </form>
    </div>
        @else
        <a href="{{ route('login') }}" class="text-white hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Login</a>
        <a href="{{ route('register') }}" class="bg-purple-500 text-white px-4 py-2 rounded-md ml-4 hover:bg-purple-600 focus:outline-none focus:bg-purple-600">Sign Up</a>
        @endauth
    </div>
</div>


        {{-- <div class="flex  items-center">
        <div class="hidden md:block">
            
            <x-dropdown-link :href="route('profile.edit')">
                <div class="text-white">{{ Auth::user()->name }}</div>
            </x-dropdown-link>
          <a href="{{ route('login') }}" class="text-white hover:text-gray-900 px-3 py-2  rounded-md text-sm font-medium">Login</a>
          <a href="{{ route('register') }}" class="bg-purple-500 text-white px-4 py-2  rounded-md ml-4 hover:bg-purple-600 focus:outline-none focus:bg-purple-600">Sign Up</a>
          <form method="POST" action="{{ route('logout') }}" >
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();"  >
                {{ __('LogOut') }}
            </x-responsive-nav-link>
        </form>
        </div>
    </div> --}}

    

      </div>
    </div>
  
    <!-- Mobile menu -->
    <div class="md:hidden" x-show="show">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <a href="#" class="text-white hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Home</a>
        <!-- <a href="#" class="text-white hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">About</a>
        <a href="#" class="text-white hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Contact</a> -->
        <!-- Authentication -->
        <div class="flex  items-center">
 
        @auth
        <div class="flex  items-center">
        <x-dropdown-link :href="route('profile.edit')" class="text-white hover:text-gray-900 px-4 py-2 cursor-pointer">
           <div> Hi, {{ Auth::user()->name }}! </div>
        </x-dropdown-link>
        <form method="POST" action="{{ route('logout') }}" >
            @csrf
            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();" class="text-white whitespace-no-wrap mt-2 hover:text-gray-900 px-4 py-2 cursor-pointer bg-purple-500 rounded-md hover:bg-purple-600 focus:outline-none focus:bg-purple-600">
                {{ __('Log Out') }}
        </x-dropdown-link>
        </form>
    </div>
        @else
        <a href="{{ route('login') }}" class="text-white hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Login</a>
        <a href="{{ route('register') }}" class="bg-purple-500 text-white px-4 py-2 rounded-md ml-4 hover:bg-purple-600 focus:outline-none focus:bg-purple-600">Sign Up</a>
        @endauth
    
</div>




      </div>
              <!-- Authentication -->

                
            

    </div>
  </nav>
  





