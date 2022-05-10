<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\User;
use Auth;
use App\Models\User;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function __construct()
{
    $this->middleware('role_or_permission:admin')->only(['profileadmin']);
    $this->middleware('role_or_permission:user')->only(['index']);

}

    public function index()
    {

       return view('form.profile');
    }
    public function profileadmin()
    {

       return view('admin.profile.profile');
    }

    public function edit()
    {
        $profile = auth()->user();
        return view('admin.profile.profile', compact('profile'));
    }

    public function updateAdmin(Request $request)
    {



        // $profile->save();
        auth()->user()->fill($request->all())->save();

        return back();
    }
    public function change_password()
    {
        return view('Admin.profile.change_password');

    }
    public function update_password(Request $request)
    {

        $validatData= $request->validate([
            'oldpassword'=>'required',
            'password'=>'required|confirmed',

        ]);
        $current_user=Auth::user()->password;

        if(Hash::check($request->oldpassword,$current_user))

  {

    $user = User::find(Auth::id());
    $user->password = Hash::make($request->password);
    $user->save();
    Auth::logout();
    return redirect()->route('login')->with('success','pass update') ;
    // $current_user->update([
    //     'passwword'=>bcrypt('$request->new_password')
    // ]);
    //return redirect()->back()->with('success','pass update') ;

  }else
{
     return redirect()->back()->with('error','old_password not correct') ;
}
}
}
