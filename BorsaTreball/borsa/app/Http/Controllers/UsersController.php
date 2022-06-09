<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Models\User;
use App\Models\Oferta;
use App\Notifications\EmailVerificationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UsersController extends Controller
{

    public function editAvatar(User $user)
    {
        return view('borsa.perfilAlum', compact('user'));
    }

    public function updateAvatar(User $user,Request $request,ImageUploadHandler $uploader)
    {
        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatars', 1);
            
            if ($result) {
                

                return view('borsa.perfilAlum',compact('data'));
            }
        }
     
        $user->avatar=$data['avatar'];
        $user->save();
        return redirect()->route('borsa.perfilAlum', $user->id)->with('success', 'Actualización exitosa');
        
    }
}