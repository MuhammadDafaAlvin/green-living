<x-guest-layout>
    <div class="bg-gray-900 text-white p-6 rounded-lg shadow-md max-w-md mx-auto">
        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-200">Username</label>
                <input id="username" name="username" type="text" value="{{ old('username') }}" required
                    class="mt-1 block w-full bg-gray-800 border border-gray-600 text-white placeholder-gray-400 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500">
                @error('username')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-200">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required
                    class="mt-1 block w-full bg-gray-800 border border-gray-600 text-white placeholder-gray-400 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500">
                @error('email')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-200">Password</label>
                <input id="password" name="password" type="password" required
                    class="mt-1 block w-full bg-gray-800 border border-gray-600 text-white placeholder-gray-400 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500">
                @error('password')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-200">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                    class="mt-1 block w-full bg-gray-800 border border-gray-600 text-white placeholder-gray-400 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-md transition duration-200">
                    Register
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
