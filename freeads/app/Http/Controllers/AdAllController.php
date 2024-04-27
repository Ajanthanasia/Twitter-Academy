<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

class AdAllController extends Controller
{
    public function index()
    {
        $ads = Announcement::where('user_id', Auth::id())->get();
        return view('dash.ad.index', compact('ads'));
    }

    public function edit(Request $request)
    {
        try {
            $adId = $request->ad_id;
            $ad = Announcement::where('id', $adId)->first();
            return view('dash.ad.edit', compact('ad'));
        } catch (Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {
        try {
            $adId = $request->ad_id;
            $announce = Announcement::where('id', $adId)->first();
            $announce->title = $request->title;
            $announce->description = $request->description;
            $announce->price = $request->price;
            $announce->save();
            return redirect()->back()->with('success', 'Ad updated');
        } catch (Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        try {
            $adId = $request->ad_id;
            Announcement::where('id', $adId)->delete();
            return redirect()->back()->with('success', 'Ad Deleted');
        } catch (Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function upload(Request $request)
    {
        try {
            $id = $request->ad_id;
            $file = $request->file('photo');
            Storage::disk('local')->put('img.jpg', $file);
            dd($id, $file);
        } catch (Throwable $th) {
            DB::rollBack();
            dd($th);
            return redirect()->back();
        }
    }
}
