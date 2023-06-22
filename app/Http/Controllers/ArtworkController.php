<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Work; // for use of model class News
use Illuminate\Support\Facades\Storage;

class ArtworkController extends Controller
{
    // artwork page contoroller

    public function show_gallery(Request $request) {
        $work_type = $request->work_type;
        // var_dump($work_type);
        
        $works = Work::orderBy('showing_order', 'asc')->orderBy('updated_at', 'desc')->get();
        return view('artwork', ['works' => $works, 'work_type' => $work_type]);
    }
}
