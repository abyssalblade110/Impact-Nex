<nav class="bg-black drop-shadow-md" x-data="{ showMobileNav: false }">
    <div class="max-w-7xl mx-auto px-2 py-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button @click="showMobileNav = !showMobileNav" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">{{__('Open main menu')}}</span>
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center content-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/">
                        <img class="block lg:hidden h-10 w-auto" src="{{asset('img/pawn.jpg')}}" alt="{{ app_name() }}">
                    </a>
                    <a href="/">
                        <img class="hidden lg:block h-12 w-auto" src="{{asset('img/pawn.jpg')}}" alt="{{ app_name() }}">
                    </a>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <a href="{{ route('frontend.posts.index') }}" class="text-gray-400 border-transparent border-b-2 hover:border-cyan-600 px-3 py-2 text-base font-medium transition ease-out duration-300">
                            {{__('Posts')}}
                        </a>
                        <a href="{{ route('frontend.categories.index') }}" class="text-gray-400 border-transparent border-b-2 hover:border-cyan-600 px-3 py-2 text-base font-medium transition ease-out duration-300">
                            {{__('Categories')}}
                        </a>
                        <a href="{{ route('frontend.tags.index') }}" class="text-gray-400 border-transparent border-b-2 hover:border-cyan-600 px-3 py-2 text-base font-medium transition ease-out duration-300">
                            {{__('Tags')}}
                        </a>
                        <a href="{{ route('frontend.comments.index') }}" class="text-gray-400 border-transparent border-b-2 hover:border-cyan-600 px-3 py-2 text-base font-medium transition ease-out duration-300">
                            {{__('Comments')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="ml-3 relative" x-data="{ isUserMenuOpen: false, isLocalMenuOpen: false }">
                    <div class="flex flex-row">
                        <button @click="isLocalMenuOpen = !isLocalMenuOpen" @keydown.escape="isLocalMenuOpen = false" type="button" class="flex flex-col sm:flex-row text-center rounded px-2 mr-2 sm:align-middle sm:items-center focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-offset-gray-500 focus:ring-white transition ease-out duration-300" id="local-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">{{__('Open local menu')}}</span>
                            <i class="fas fa-globe"></i>
                            <span>
                                <span class="hidden sm:inline">&nbsp;</span>
                                {{strtoupper(App::getLocale())}}
                            </span>
                        </button>
                        @guest
                        <a href="{{ route('login') }}" class="flex items-center mx-2 px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-cyan-600 rounded-md hover:bg-cyan-500 focus:outline-none focus:bg-cyan-500 invisible md:visible">
                            <i class="fas fa-sign-in-alt"></i>
                            <span class="mx-1">{{__('Login')}}</span>
                        </a>
                        @if(user_registration())
                        <a href="{{ route('register') }}" class="flex items-center mx-2 px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-cyan-600 rounded-md hover:bg-cyan-500 focus:outline-none focus:bg-cyan-500 invisible md:visible">
                            <i class="fas fa-user-plus"></i>
                            <span class="mx-1">{{__('Register')}}</span>
                        </a>
                        @endif
                        @else
                        <button @click="isUserMenuOpen = !isUserMenuOpen" @keydown.escape="isUserMenuOpen = false" type="button" class="flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-offset-cyan-800 focus:ring-white transition ease-out duration-300" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">{{__('Open Main Menu')}}</span>
                            <img class="h-10 w-10 rounded-full border-transparent border hover:border-cyan-600" src="{{asset(auth()->user()->avatar)}}" alt="{{asset(auth()->user()->name)}}">
                        </button>
                        @endguest
                    </div>
                    @auth
                    <div x-show="isUserMenuOpen" @click.away="isUserMenuOpen = false" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-2 bg-black ring-1 ring-cyan-800 ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        @can('view_backend')
                        <a href='{{ route("backend.dashboard") }}' class="block px-4 py-2 text-sm text-gray-400 hover:bg-cyan-600 hover:text-white" role="menuitem">
                            <i class="fas fa-tachometer-alt"></i>&nbsp;{{__('Admin Dashboard')}}
                        </a>
                        @endif
                        <a href="{{ route('frontend.users.profile', encode_id(auth()->user()->id)) }}" class="block px-4 py-2 text-sm text-gray-400 hover:bg-cyan-600 hover:text-white" role="menuitem">
                            <i class="fas fa-user"></i>&nbsp;{{ Auth::user()->name }}
                        </a>
                        <a href="{{ route('frontend.users.profileEdit', encode_id(auth()->user()->id)) }}" class="block px-4 py-2 text-sm text-gray-400 hover:bg-cyan-600 hover:text-white" role="menuitem">
                            <i class="fas fa-cogs"></i>&nbsp;{{__('Settings')}}
                        </a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-400 hover:bg-cyan-600 hover:text-white" role="menuitem">
                            {{__('Logout')}}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    @endauth
                   <div x-show="isLocalMenuOpen" @click.away="isLocalMenuOpen = false" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 py-2 w-48 rounded-md shadow-lg bg-black ring-1 ring-cyan-800 ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="local-menu-button" tabindex="-1">
    @foreach(config('app.available_locales') as $locale_code => $locale_name)
        <div class="hover:bg-cyan-800 px-4 py-1">
            <a class="dropdown-item text-gray-400" href="{{route('language.switch', $locale_code)}}">
                {{ $locale_name }}
            </a>
        </div>
    @endforeach
</div>

                </div>
            </div>
        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden absolute z-10 w-full p-1" id="mobile-menu" x-show="showMobileNav" @click.away="showMobileNav = false" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-black shadow-lg rounded-md ring-1 ring-cyan-800 ring-opacity-5">
            <a href="{{ route('frontend.posts.index') }}" class="text-gray-400 block px-3 py-2 rounded-md text-base font-medium">
                {{__('Posts')}}
            </a>
            <a href="{{ route('frontend.categories.index') }}" class="text-gray-400 block px-3 py-2 rounded-md text-base font-medium">
                {{__('Categories')}}
            </a>
            <a href="{{ route('frontend.tags.index') }}" class="text-gray-400 block px-3 py-2 rounded-md text-base font-medium">
                {{__('Tags')}}
            </a>
            <a href="{{ route('frontend.comments.index') }}" class="text-gray-400 block px-3 py-2 rounded-md text-base font-medium">
                {{__('Comments')}}
            </a>
            @can('view_backend')
            <a href='{{ route("backend.dashboard") }}' class="text-gray-400 block px-3 py-2 rounded-md text-base font-medium border" role="menuitem">
                <i class="fas fa-tachometer-alt"></i>&nbsp;{{__('Admin Dashboard')}}
            </a>
            @endif
            @guest
            <hr class="border-cyan-800">
            <a href="{{ route('login') }}" class="text-gray-400 block mt-2 px-3 py-2 rounded-md text-base font-medium bg-black">
                <i class="fas fa-sign-in-alt"></i>
                <span class="mx-1">{{__('Login')}}</span>
            </a>
            @if(user_registration())
            <a href="{{ route('register') }}" class="text-gray-400 block px-3 py-2 rounded-md text-base font-medium bg-black">
                <i class="fas fa-user-plus"></i>
                <span class="mx-1">{{__('Create an account')}}</span>
            </a>
            @endif
            @endauth
        </div>
    </div>
</nav>
