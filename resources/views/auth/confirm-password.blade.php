<x-guest-layout>
    <!-- Modal -->
    <div class="fixed inset-0 bg-white opacity-70"></div>
    <div class="bg-white h-96 shadow-md p-4 max-w-lg m-auto rounded-lg fixed inset-0">

        <form action="/user/confirm-password" method="POST" class="">
            @csrf
            <div class="px-10 py-5">
                <h2 class="text-2xl text-center text-gray-700 font-semibold mb-6">Confirm password</h2>
                <img class="w-20 h-20 object-cover rounded-full mx-auto shadow-lg" src="{{ asset('images/avatars/admin.png') }}" alt="User avatar">
{{--                <img class="w-20 h-20 object-cover rounded-full mx-auto shadow-lg" src="{{ auth()->user()->avatar }}" alt="User avatar">--}}
                <p class="capitalize text-xl mt-1 text-white">{{ auth()->user()->name }}</p>
                <input class="w-full px-5 py-1 mt-4 text-gray-700 border rounded focus:outline-none focus:bg-white"
                       type="password" id="password" name="password" placeholder="Password" arial-label="password" required autofocus
                >
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <button type="submit" class="mt-8 w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-700 hover:bg-red-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-700">
                    Confirm
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
