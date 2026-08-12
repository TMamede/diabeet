<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function updatePhoto(Request $request)
    {
        
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,JPEG,JPG,PNG,gif|max:5120',
        ]);

        if ($request->hasFile('photo')) {
            if (Auth::user()->profile_photo) {
                Storage::disk('public')->delete(Auth::user()->profile_photo);
            }

            $path = $request->file('photo')->store('profile-photos', 'public');

            Auth::user()->update([
                'profile_photo' => $path,
            ]);

            return back()->with('success', 'Foto atualizada com sucesso!');
        }
   
        return back()->with('error', 'Erro ao enviar a foto.');
    }

    public function deletePhoto()
    {
        if (Auth::user()->profile_photo) {
            Storage::disk('public')->delete(Auth::user()->profile_photo);
            Auth::user()->update(['profile_photo' => null]);
        }

        return back()->with('success', 'Foto removida com sucesso!');
    }
}
