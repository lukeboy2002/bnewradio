@if (session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-green-100 text-white py-2 px-4 rounded-xl top-3 right-3 text-sm z-50"
    >
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-green-800">
                    Success
                </h3>
                <div class="mt-2 text-sm text-green-700">
                    <p>
                        {{ session('success') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif

<!-- Status session -->
@if (session('status'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-green-100 text-white py-2 px-4 rounded-xl top-3 right-3 text-sm"
    >
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-green-800">
                    Success
                </h3>
                <div class="mt-2 text-sm text-green-700">
                    <p>
                        {{ session('status') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- End status session -->

@if (session('status') === 'profile-information-updated')
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-green-100 text-white py-2 px-4 rounded-xl top-3 right-3 text-sm z-50"
    >
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-green-800">
                    Success
                </h3>
                <div class="mt-2 text-sm text-green-700">
                    <p>
                        profile information updated
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif

@if (session('status') === 'password-updated')
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-green-100 text-white py-2 px-4 rounded-xl top-3 right-3 text-sm z-50"
    >
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-green-800">
                    Success
                </h3>
                <div class="mt-2 text-sm text-green-700">
                    <p>
                        Password has been updated.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif


@if (session('status') == 'two-factor-authentication-enabled')
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-green-100 text-white py-2 px-4 rounded-xl top-3 right-3 text-sm z-50"
    >
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-green-800">
                    Success
                </h3>
                <div class="mt-2 text-sm text-green-700">
                    <p>
                        Two factor authentication has been enabled.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif

@if (session('status') == 'two-factor-authentication-disabled')
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-green-100 text-white py-2 px-4 rounded-xl top-3 right-3 text-sm z-50"
    >
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-green-800">
                    Success
                </h3>
                <div class="mt-2 text-sm text-green-700">
                    <p>
                        Two factor authentication has been disabled.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif
