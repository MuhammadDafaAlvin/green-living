<x-app-layout>
    <div class="py-4 bg-black min-h-screen text-stone-300">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Pesan Status -->
                    @if (session('status'))
                        <div class="mb-4 p-4 bg-green-700 text-stone-300 rounded-md">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="mb-4 p-4 bg-red-700 text-stone-300 rounded-md">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Form Update Profil -->
                    <div>
                        <h3 class="text-lg font-medium">Informasi Profil</h3>
                        <form method="POST" action="{{ route('profile.update') }}" class="space-y-6 mt-4">
                            @csrf
                            @method('patch')

                            <!-- Username -->
                            <div>
                                <label for="username" class="block text-sm font-medium">Nama Pengguna</label>
                                <input id="username" name="username" type="text"
                                    value="{{ old('username', $user->username) }}" required class="mt-1 block w-full border border-gray-600 bg-black text-stone-300 rounded-md shadow-sm focus:ring-gray-400 focus:border-gray-400
">
                                @error('username')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium">Email</label>
                                <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}"
                                    required class="mt-1 block w-full border border-gray-600 bg-black text-stone-300 rounded-md shadow-sm focus:ring-gray-400 focus:border-gray-400
">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <button type="submit"
                                    class="bg-yellow-600 text-stone-300 py-2 px-4 rounded-xl hover:bg-yellow-700 transition">
                                    Simpan Profil
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Form Update Kata Sandi -->
                    <div class="mt-8 border-t border-gray-600 pt-6">
                        <h3 class="text-lg font-medium">Ubah Kata Sandi</h3>
                        <form method="POST" action="{{ route('profile.update') }}" class="space-y-6 mt-4">
                            @csrf
                            @method('patch')

                            <!-- Kata Sandi Baru -->
                            <div>
                                <label for="password" class="block text-sm font-medium">Kata Sandi Baru</label>
                                <input id="password" name="password" type="password" class="mt-1 block w-full border border-gray-600 bg-black text-stone-300 rounded-md shadow-sm focus:ring-gray-400 focus:border-gray-400
">
                                @error('password')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Konfirmasi Kata Sandi -->
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium">Konfirmasi Kata
                                    Sandi</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full border border-gray-600 bg-black text-stone-300 rounded-md shadow-sm focus:ring-gray-400 focus:border-gray-400
">
                            </div>

                            <div>
                                <button type="submit"
                                    class="bg-yellow-600 text-stone-300 py-2 px-4 rounded-xl hover:bg-yellow-700 transition">
                                    Simpan Kata Sandi
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Form Hapus Akun -->
                    <div class="mt-8 border-t border-gray-600 pt-6">
                        <h3 class="text-lg font-medium">Hapus Akun</h3>
                        <p class="mt-1 text-sm text-gray-300">Hapus akun Anda secara permanen. Tindakan ini tidak dapat
                            dibatalkan.</p>
                        <form method="POST" action="{{ route('profile.destroy') }}" class="mt-4">
                            @csrf
                            @method('delete')

                            <div>
                                <label for="password_delete" class="block text-sm font-medium">Kata Sandi</label>
                                <input id="password_delete" name="password" type="password" required
                                    class="mt-1 block w-full border border-gray-600 bg-black text-stone-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500">
                                @error('password', 'userDeletion')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit"
                                class="mt-4 bg-red-600 text-stone-300 py-2 px-4 rounded-xl hover:bg-red-700 transition">
                                Hapus Akun
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>