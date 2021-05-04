<?php

namespace App\Http\Controllers;

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
}

