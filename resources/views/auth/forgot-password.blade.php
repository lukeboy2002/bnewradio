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
                    <p class="text-gray-700 font-medium text-center text-lg font-bold">Reset password</p>
                </div>
                <form action="{{ route('password.request') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email address
                        </label>
                        <div class="mt-1">
                            <input id="email"
                                   name="email"
                                   type="email"
                                   value="{{ old('email') }}"
                                   aria-label="email"
                                   required
                                   autocomplete="email"
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-700 focus:border-red-700 sm:text-sm"
                            >
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-700 hover:bg-red-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-700">
                            Reset password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
