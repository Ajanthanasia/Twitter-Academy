<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

class SignInController extends Controller
{
    public function indexShow()
    {
        return view('sign-in.index');
    }

    public function signin(Request $request)
    {
        try {
            $data = [
                'email' => $request->email,
                'password' => $request->password,
            ];
            if (Auth::attempt($data)) {
                return view('dash.index')->with('success', 'Login Success');
            } else {
                return redirect()->back();
            }
        } catch (Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function editProfile()
    {
        return view('dash.edit');
    }

    public function updateProfile(Request $request)
    {
        try {
            $user = User::where("id", Auth::id())->first();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            return redirect()->route('user.dash');
        } catch (Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function dash()
    {
        return view('dash.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function destroy(Request $request)
    {
        try {
            DB::beginTransaction();
            $id = $request->id;
            User::where('id', $id)->delete();
            DB::commit();
            return redirect('/');
        } catch (Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }
}
