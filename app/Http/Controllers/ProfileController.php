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

        // Obtém o usuário autenticado
        $user = $request->user();

        // Retorna a visualização com os valores do usuário
        return view('profile.edit', [
            'user' => $user,
            'firstName' => $user->first_name,
            'lastName' => $user->last_name,
            'ddd' => $user->ddd,
            'number' => $user->number,
            'email' => $user->email,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
            $request->user()->first_name = $request->input('first_name');
            $request->user()->last_name = $request->input('last_name');
            $request->user()->ddd = $request->input('ddd');
            $request->user()->number = $request->input('number');
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
