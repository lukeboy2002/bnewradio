<x-guest-layout>

    <x-flash />
<!-- End status session -->
    <div class="h-screen font-sans auth bg-cover">
        <div class="container mx-auto h-full flex flex-1 justify-center items-center">
            <div class="w-full max-w-lg">
                <div class="leading-loose">

                    <div class="max-w-md m-4 p-8 bg-white rounded-lg shadow-xl">
                        <h1 class="text-3xl text-black font-black text-center mb-3">{{ config('app.name', 'Laravel') }}</h1>
                        <p class="text-gray-700 font-medium text-center text-lg font-bold">Enter your code here for two factor auth</p>

                        <div x-data="{ recovery: false }">
                            <form action="/two-factor-challenge" method="POST" x-show="! recovery" >
                                @csrf
                                <p class="mt-1 text-sm text-gray-700">Please confirm access to your account by entering the authentication code provided by your authenticator application.</p>

                                <label class="mt-4 mb-1 block text-sm text-white" for="code">Code</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-100 rounded focus:outline-none focus:bg-gray-200"
                                       type="text" id="code" name="code" placeholder="Code" aria-label="code" required autofocus
                                >
                                @error('code')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror

                                <div class="mt-8 flex justify-end items-center">
                                    <button type="button" class="text-sm text-gray-700 dark:text-gray-400 hover:text-black hover:underline"
                                            x-show="! recovery"
                                            x-on:click="
                                                recovery = true;
                                                $nextTick(() => { $refs.recovery_code.focus() })">
                                        Use a recovery code
                                    </button>
                                    <button class="ml-4 bg-gray-700 text-white font-bold py-2 px-4 rounded hover:bg-gray-600">Login</button>
                                </div>
                            </form>

                            <form action="/two-factor-challenge" method="POST" x-show="recovery">
                                @csrf

                                <p class="mt-1 text-sm text-gray-700 dark:text-gray-400">Please confirm access to your account by entering one of your emergency recovery codes.</p>

                                <label class="mt-4 mb-1 block text-sm text-gray-900 dark:text-white font-semibold">Recovery Code</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-100 rounded focus:outline-none focus:bg-gray-200"
                                       type="text" id="recovery_code" name="recovery_code" placeholder="Recovery code" aria-label="recovery_code" required autofocus
                                >
                                @error('recovery_code')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror

                                <div class="mt-8 flex justify-end items-center">
                                    <button type="button" class="text-sm text-gray-700 dark:text-gray-400 hover:text-black hover:underline"
                                            x-show="recovery"
                                            x-on:click="
                                            recovery = false;
                                            $nextTick(() => { $refs.code.focus() })">
                                        Use an authentication code
                                    </button>
                                    <button class="ml-4 bg-gray-700 text-white font-bold py-2 px-4 rounded hover:bg-gray-600">Login</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
