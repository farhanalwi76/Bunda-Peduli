<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),  // Menampilkan user yang sedang login
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // Mengambil user yang sedang login
        $user = $request->user();

        // Mengisi data user yang terverifikasi
        $user->fill($request->validated());

        // Jika email diubah, set email_verified_at menjadi null
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Menyimpan perubahan ke database
        $user->save();

        // Mengarahkan kembali ke halaman profile dengan status berhasil
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Validasi untuk memastikan user memasukkan password yang benar
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        // Mengambil user yang sedang login
        $user = $request->user();

        // Logout dari sistem
        Auth::logout();

        // Menghapus akun user dari database
        $user->delete();

        // Menghancurkan session dan mereset token untuk keamanan
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Mengarahkan ke halaman utama setelah akun dihapus
        return Redirect::to('/');
    }
}
