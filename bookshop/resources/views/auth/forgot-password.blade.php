<x-layout>
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <form method="POST" action="{{ route('password.email') }}" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-sm">
            @csrf

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-sm font-semibold text-gray-700" />
                <x-text-input id="email" 
                              class="block mt-1 w-full px-4 py-2 text-sm border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" 
                              type="email" 
                              name="email" 
                              :value="old('email')" 
                              required 
                              autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-lg transition">
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-layout>
