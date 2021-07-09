<nav x-data="{ isOpen: false }"
     @keydown.escape="isOpen = false"
     class="bg-white shadow w-full sticky top-0 z-50"
>
    <div class="w-full px-4 sm:px-6">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center flex-shrink-0 ">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img class="h-12 w-12 flex-none" src="{{ asset('images/logo/logo.png') }}" alt="Logo">
                    <div class="hidden lg:block ml-4 text-2xl font-black text-red-700">{{ config('app.name', 'Laravel') }}</div>
                </a>
            </div>
            <div class="flex items-center">
                <div class="hidden md:ml-3 md:flex">
                    <x-menu.LinksHorizontal></x-menu.LinksHorizontal>
                    {{--                    @can('is-admin')--}}
                    {{--                        <a href="{{ route('admin.users.index') }}" class="pt-1 px-1 px-5 inline-flex items-center text-gray-700 font-medium text-sm h-16 border-b-2 border-transparent hover:border-red-500 focus:outline-none focus:border-red-500">--}}
                    {{--                            All Users--}}
                    {{--                        </a>--}}
                    {{--                    @endcan--}}
                </div>
            </div>
            <div class="hidden md:block">
                @if (Route::has('login'))
                    @auth
                        <div class="ml-4 flex items-center md:ml-6">
                            <!-- Profile dropdown -->
                            <div class="ml-3 relative">
                                <div x-data="{ isDropdownOpen: false }" @keydown.escape="isDropdownOpen = false" class="ml-3 relative">
                                    <div class="flex items-center">
                                        <button type="button" @click="isDropdownOpen = !isDropdownOpen" @click.away="isDropdownOpen = false" class="flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-700 focus:ring-white" id="user-menu" aria-haspopup="true">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="h-8 w-8 rounded-full" src="{{ current_user()->avatar }}" alt="">
{{--                                            <img class="h-8 w-8 rounded-full" src="{{ asset('images/avatars/user.png') }}" alt="">--}}
                                        </button>
                                    </div>
                                    <div x-show="isDropdownOpen"
                                         x-transition:enter="transition ease-out duration-300 transform"
                                         x-transition:enter-start="opacity-0 scale-95"
                                         x-transition:enter-end="opacity-100 scale-100"
                                         x-transition:leave="transition ease-in duration-300 transform"
                                         x-transition:leave-start="opacity-100 scale-100"
                                         x-transition:leave-end="opacity-0 scale-95"
                                         class="origin-top-right absolute z-50 right-0 mt-2 w-48 rounded-lg shadow-lg py-1 bg-white border border-gray-400 ring-1 ring-black ring-opacity-5"
                                         role="menu"
                                         aria-orientation="vertical"
                                         aria-labelledby="user-menu"
                                    >
                                        <x-menu.LinksProfile></x-menu.LinksProfile>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}"
                           class="pt-1 px-1 px-5 inline-flex items-center text-gray-700 font-medium text-sm h-16 border-b-2 border-transparent hover:border-red-500 focus:outline-none focus:border-red-500">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="pt-1 px-1 px-5 inline-flex items-center text-gray-700 font-medium text-sm h-16 border-b-2 border-transparent hover:border-red-500 focus:outline-none focus:border-red-500">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen" class="p-2 inline-flex items-center justify-center rounded-lg text-gray-900 hover:text-red-700 focus:bg-red-100 focus:outline-none focus:text-gray-600" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path x-show="isOpen" fill-rule="evenodd" clip-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                        <path x-show="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen"class="md:hidden" id="mobile-menu">

        <div class="px-2 pt-2 pb-2 sm:px-3">
            <x-menu.LinksVertical></x-menu.LinksVertical>
        </div>

        <div class="pt-2 pb-2 border-t border-gray-300">
            @if (Route::has('login'))
                @auth
                    <div class="flex justify-between items-center mr-8">
                        <div class="flex items-center px-5">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="{{ current_user()->avatar }}" alt="Avatar">
{{--                                <img class="h-10 w-10 rounded-full" src="{{ asset('images/avatars/user.png') }}" alt="Avatar">--}}
                            </div>
                            <div class="ml-3">
                                <div class="font-bold leading-none text-red-700">{{ current_user()->username }}</div>
                                <div class="text-sm font-medium leading-none text-gray-400">{{ current_user()->email }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 px-2">
                        <x-menu.LinksProfile></x-menu.LinksProfile>
                    </div>
                @else
                    <div class="px-2 sm:px-3">
                        <a href="{{ route('login') }}" class="px-3 py-2 text-gray-900 block text-base font-medium hover:bg-red-100 focus:bg-red-100">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-3 py-2 text-gray-900 block text-base font-medium hover:bg-red-100 focus:bg-red-100">Register</a>
                        @endif
                    </div>
                @endauth
            @endif
        </div>
    </div>
</nav>
