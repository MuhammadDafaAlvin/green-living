<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    /**
     * Menampilkan form edit profil.
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Memperbarui data profil pengguna atau kata sandi.
     */
    public function update(Request $request)
    {
        // Validasi untuk profil (username dan email)
        if ($request->filled('username') || $request->filled('email')) {
            $request->validate([
                'username' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $request->user()->id],
            ]);

            $request->user()->update([
                'username' => $request->username,
                'email' => $request->email,
            ]);

            return Redirect::route('profile.edit')->with('status', 'Profil berhasil diperbarui!');
        }

        // Validasi untuk kata sandi
        if ($request->filled('password')) {
            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            $request->user()->update([
                'password' => Hash::make($request->password),
            ]);

            return Redirect::route('profile.edit')->with('status', 'Kata sandi berhasil diperbarui!');
        }

        return Redirect::route('profile.edit')->with('error', 'Tidak ada data yang diperbarui.');
    }

    /**
     * Menghapus akun pengguna.
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = $request->user();
        Auth::logout();
        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/')->with('status', 'Akun berhasil dihapus.');
    }
}
