{{--<a href="{{ route('profiles.show', current_user()->name) }}" class="px-3 py-2 text-gray-900 block text-base font-medium hover:bg-red-100 focus:bg-red-100">Your Profile</a>--}}
<a href="#" class="px-3 py-2 text-gray-900 block text-base font-medium hover:bg-red-100 focus:bg-red-100">Your Profile</a>
{{--<a href="{{ routee('profiles.edit', current_user()->name) }}" class="px-3 py-2 text-gray-900 block text-base font-medium hover:bg-red-100 focus:bg-red-100">Your Settings</a>--}}
<a href="#" class="px-3 py-2 text-gray-900 block text-base font-medium hover:bg-red-100 focus:bg-red-100">Your Settings</a>
{{--<a href="{{ route('profiles.edit', auth()->user()->id) }}" class="px-3 py-2 text-gray-900 block text-base font-medium hover:bg-red-100 focus:bg-red-100">Your Settings</a>--}}
<a href="#" class="px-3 py-2 text-gray-900 block text-base font-medium hover:bg-red-100 focus:bg-red-100">Your Settings</a>

<a href="{{ route('logout') }}" class="px-3 py-2 text-gray-900 block text-base font-medium hover:bg-red-100 focus:bg-red-100"
   onclick="event.preventDefault();
   document.getElementById('logout-form').submit();"
>
    Sign out</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
