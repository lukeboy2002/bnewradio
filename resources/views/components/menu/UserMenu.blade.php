<nav class="space-y-1">
    @can('is-admin')
        <div class="relative mb-3">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-start">
                <span class="inline-flex items-center ml-3 px-3 py-0.5 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                    Admin
                </span>
            </div>
        </div>

        <a href="{{ route('admin.users.index') }}" class="bg-teal-50 border-red-700 bg-red-100 text-teal-700 hover:bg-teal-50 hover:text-teal-700 group border-l-4 px-3 py-2 flex items-center text-sm font-medium" aria-current="page">
            <svg class="text-teal-500 group-hover:text-teal-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg>
            <span class="truncate">All Users</span>
        </a>

        <div class="relative py-5">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
        </div>
    @endcan

    <a href="{{ route('tweets.index') }}" class="bg-teal-50 border-red-700 bg-red-100 text-teal-700 hover:bg-teal-50 hover:text-teal-700 group border-l-4 px-3 py-2 flex items-center text-sm font-medium" aria-current="page">
        <svg class="text-teal-500 group-hover:text-teal-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
        </svg>
        <span class="truncate">Home</span>
    </a>

    <a href="#" class="border-transparent text-gray-700 group border-l-4 hover:border-red-700 px-3 py-2 flex items-center text-sm font-medium">
        <svg class="text-teal-500 group-hover:text-teal-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zm8 0a3 3 0 11-6 0 3 3 0 016 0zm-4.07 11c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
        </svg>
        <span class="truncate">Explore</span>
    </a>

    <a href="#" class="border-transparent text-gray-700 group border-l-4 hover:border-red-700 px-3 py-2 flex items-center text-sm font-medium">
        <svg class="text-teal-500 group-hover:text-teal-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zm0 16a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
        </svg>
        <span class="truncate">Notifications</span>
    </a>

    <a href="#" class="border-transparent text-gray-700 group border-l-4 hover:border-red-700 px-3 py-2 flex items-center text-sm font-medium">
        <svg class="text-teal-500 group-hover:text-teal-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/><path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"/>
        </svg>
        <span class="truncate">Messages</span>
    </a>

    <a href="#" class="border-transparent text-gray-700 group border-l-4 hover:border-red-700 px-3 py-2 flex items-center text-sm font-medium">
        <svg class="text-teal-500 group-hover:text-teal-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"/>
        </svg>
        <span class="truncate">Bookmarks</span>
    </a>

    <a href="{{ route('profiles.show', current_user()->name ) }}" class="border-transparent text-gray-700 group border-l-4 hover:border-red-700 px-3 py-2 flex items-center text-sm font-medium">
        <svg class="text-teal-500 group-hover:text-teal-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/>
        </svg>
        <span class="truncate">Profile</span>
    </a>

    <a href="{{ route('profiles.edit', current_user()->name ) }}" class="border-transparent text-gray-700 group border-l-4 hover:border-red-700 px-3 py-2 flex items-center text-sm font-medium">
        <svg class="text-teal-500 group-hover:text-teal-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/>
        </svg>
        <span class="truncate">Edit Profile</span>
    </a>

    <a href="{{ route('password') }}" class="border-transparent text-gray-700 group border-l-4 hover:border-red-700 px-3 py-2 flex items-center text-sm font-medium">
        <svg class="text-gray-700 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
        </svg>
        <span class="truncate">Change password</span>
    </a>

    <a href="{{ route('two-factor-auth') }}" class="border-transparent text-gray-700 group border-l-4 hover:border-red-700 px-3 py-2 flex items-center text-sm font-medium">
        <svg class="text-green-700 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm2 2V5h1v1H5zm-2 7a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm2 2v-1h1v1H5zm8-12a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V4a1 1 0 00-1-1h-3zm1 2v1h1V5h-1z" clip-rule="evenodd"/>
            <path d="M11 4a1 1 0 10-2 0v1a1 1 0 002 0V4zm-1 3a1 1 0 011 1v1h2a1 1 0 110 2h-3a1 1 0 01-1-1V8a1 1 0 011-1zm6 2a1 1 0 100 2 1 1 0 000-2zm-7 4a1 1 0 011-1h1a1 1 0 110 2v2a1 1 0 11-2 0v-3zm-2-2a1 1 0 100-2H4a1 1 0 100 2h3zm10 2a1 1 0 01-1 1h-2a1 1 0 110-2h2a1 1 0 011 1zm-1 4a1 1 0 100-2h-3a1 1 0 100 2h3z"/>
        </svg>
        <div class="w-full flex justify-between">
            <span class="truncate">MFA</span>
            @if (current_user()->two_factor_secret)
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                    Enabled
                </span>
            @else
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-pink-100 text-pink-800">
                    Disabled
                </span>
            @endif
        </div>
    </a>
</nav>

