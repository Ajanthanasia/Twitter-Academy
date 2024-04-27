<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;
use Throwable;

class SignUpController extends Controller
{
    public function create()
    {
        return view('sign-up.create');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->remember_token = Uuid::uuid4()->toString();
            $user->save();
            DB::commit();
            return redirect('/')->with('success', 'Account Created');
        } catch (Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }
}
