<x-layout>
    <div class="flex justify-center items-center h-screen bg-gray-100 dark:bg-gray-900">
        <div class="w-full max-w-md bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name:</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-3 py-2 mt-1 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email:</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-3 py-2 mt-1 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                </div>

                <!-- Message -->
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message:</label>
                    <textarea id="message" name="message" required rows="4"
                        class="w-full px-3 py-2 mt-1 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:border-gray-700 dark:bg-gray-700 dark:text-white"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button type="submit"
                        class="w-full py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm rounded-lg shadow-md transition">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
