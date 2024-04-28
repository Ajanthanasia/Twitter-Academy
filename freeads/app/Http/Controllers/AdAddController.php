<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

class AdAddController extends Controller
{
    public function create()
    {
        return view('dash.ad.create');
    }

    public function store(Request $request)
    {
        try {
            $announce = new Announcement();
            $announce->user_id = Auth::id();
            $announce->title = $request->title;
            $announce->description = $request->description;
            $announce->price = $request->price;
            $announce->save();
            // return redirect()->back()->with('success', 'Ad added');
            return redirect()->route('ad.all.edit', ['ad_id' => $announce->id]);
        } catch (Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }
}
