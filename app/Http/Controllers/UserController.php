<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function passwordChangeForm()
    {
        return view('auth.passwords.change-password');
    }

    public function passwordChange(Request $request)
    {
        $id = $request->input('id');

        $user = User::find($id);
        if (Hash::check($request->input('old'),$user->password))
        {
            if ($request->input('password') == $request->input('password_confirmation'))
            {
                $user->password = Hash::make($request->input('password'));
                $user->save();

                Auth::logout();
                toastr()->success('Password Changed Successfully');
                return redirect('/login');
            }
            else
            {
                toastr()->warning('New Passwords don\'t Match');
                return back();
            }
        }
        else
        {
            toastr()->error('Old Passwords don\'t Match');
            return back();
        }
    }


    //photo upload form
    public function uploadPhotoForm(User $user)
    {
        $user = User::find($user->id);
        return view('upload-avatar', compact('user'));
    }

    //photo upload
    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'image'=>'required|file|mimes:jpeg,jpg,png|max:2024'
        ]);

        $user = auth()->user();
        $oldPhoto = $user->getOriginal('profile_photo_path');

        if ($request->file('image'))
        {
            if (File::exists($oldPhoto))
            {
                File::delete($oldPhoto);
            }

            $path = $request->file('image')->store('ProfilePhotos','public');
            $user->profile_photo_path = 'storage/'.$path;
        }
        $user->save();

        if ($user->is_manager) {
            return redirect()->route('manager.profile');
        }

        
        return redirect()->route('user.profile');
    }

}

