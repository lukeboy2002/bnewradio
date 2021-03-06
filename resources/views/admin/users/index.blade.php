<x-user-layout>
    <x-messages.flash />
    <div class="py-4 px-2 divide-y divide-gray-200 lg:col-span-9">
        <ul class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($users as $user)
                <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                    <div class="w-full flex items-center justify-between p-6 space-x-6">
                        <div class="flex-1 truncate">
                            <div class="flex items-center space-x-3">
                                <h3 class="text-gray-900 text-sm font-medium truncate">{{$user->username}}</h3>

                                <span class="flex-shrink-0 inline-block px-2 py-0.5 text-gray-500 text-xs font-medium bg-blue-100 rounded-full">
                                {{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}
                            </span>

                            </div>
                            <a href="#" class="mt-1 text-blue-500 text-sm truncate">
                                {{$user->email}}
                            </a>
                            <p class="mt-1 text-gray-500 text-sm truncate">{{$user->jobtitle}}</p>
                        </div>
                        <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0" src="{{$user->avatar}}" alt="users {{$user->username}} avatar">
                    </div>
                    <div>
                        <div class="-mt-px flex divide-x divide-gray-200 h-16">
                            <div class="w-0 flex-1 flex justify-center items-center">
                                <a href="{{ route ('admin.users.edit', $user->id) }}" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                    <svg class="h-5 w-5 text-gray-400"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 640 512"
                                         fill="currentColor"
                                         aria-hidden="true"
                                    >
                                        <path fill="currentColor"
                                              d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"
                                        />
                                    </svg>
                                    <span class="ml-3">Edit</span>
                                </a>
                            </div>

                            <div class="-ml-px w-0 flex-1 flex justify-center items-center">
                                Follow me
{{--                                <x-tweet.follow-button :user="$user"/>--}}
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="divide-y divide-gray-200">
            <div class="mt-2 py-4 px-4 sm:px-6">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-user-layout>
