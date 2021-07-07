<x-guest-layout>
    <x-messages.flash />

    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <img class="mx-auto h-12 w-auto" src="{{ asset('images/logo/logo.png') }}" alt="{{ config('app.name', 'Laravel') }}">
                    <h2 class="mt-3 text-center text-3xl font-extrabold text-gray-900">
                        {{ config('app.name', 'Laravel') }}
                    </h2>
                    <p class="text-gray-700 font-medium text-center text-lg font-bold">You must verify your email address, please check your email for a verification link</p>
                </div>

                <div class="flex justify-between">
                <form action="{{ route('verification.send') }}" method="POST" class="space-y-6">
                    @csrf
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Resend verification link
                    </button>
               </form>

                <form action="{{ route('logout') }}" method="POST" class="mt-6">
                    @csrf
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-700 hover:bg-red-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-700">
                        Logout
                    </button>
                </form>
                </div
            </div>
        </div>
    </div>
</x-guest-layout>
