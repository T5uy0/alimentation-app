<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\PasswordUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules\Password;

class SettingController extends Controller
{
    /**
     * Affiche la page des paramètres du profil.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('settings.index', [
            'user' => Auth::user()
        ]);
    }

    /**
     * Met à jour les informations du profil utilisateur.
     *
     * @param ProfileUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();

        $user->fill($request->validated());

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return redirect()
            ->route('settings.index')
            ->with('status', 'profile-updated');
    }

    /**
     * Met à jour le mot de passe de l'utilisateur.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    public function updatePassword(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'current_password' => ['required', 'string'],
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols(),
                'confirmed',
            ],
        ]);

        $user = Auth::user();

        if (!Hash::check($validated['current_password'], $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => [__('Le mot de passe actuel est incorrect.')],
            ]);
        }

        $user->password = Hash::make($validated['password']);
        $user->save();

        return redirect()
            ->route('settings.index')
            ->with('status', 'password-updated');
    }
}
