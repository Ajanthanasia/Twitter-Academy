<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        try {
            $src = $request->src;
            $ads = Announcement::when($src != null, function ($query) use ($src) {
                $query
                    ->orWhere('title', 'like', '%' . $src . '%')
                    ->orWhereHas('user', function ($q) use ($src) {
                        $q->where('name', 'like', '%' . $src . '%');
                    });
            })->get();
            return view('dash.search.index', compact(
                'ads',
                'src'
            ));
        } catch (Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }
}
