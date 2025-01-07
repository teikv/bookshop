<x-layout>
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <form method="POST" action="{{ route('password.update') }}" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            @csrf
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-sm font-semibold text-gray-700" />
                <x-text-input id="email" 
                              class="block mt-1 w-full px-4 py-2 text-sm border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" 
                              type="email" 
                              name="email" 
                              :value="old('email', $request->email)" 
                              required 
                              autofocus 
                              autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-sm font-semibold text-gray-700" />
                <x-text-input id="password" 
                              class="block mt-1 w-full px-4 py-2 text-sm border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" 
                              type="password" 
                              name="password" 
                              required 
                              autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-sm font-semibold text-gray-700" />
                <x-text-input id="password_confirmation" 
                              class="block mt-1 w-full px-4 py-2 text-sm border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" 
                              type="password" 
                              name="password_confirmation" 
                              required 
                              autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-500" />
            </div>

            <div class="flex items-center justify-end mt-6">
                <x-primary-button class="py-2 px-6 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-lg transition">
                    {{ __('Reset Password') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-layout>
