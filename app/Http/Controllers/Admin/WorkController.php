<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Work; // for use of model class News
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    //
    public function add()
    {
        return view('admin.work.create');
    }

    public function create(Request $request)
    {
        // dd($request);
        // Validation
        $this->validate($request, Work::$rules);
        
        $work = new Work;
        $form = $request->all();
        
        if (isset($form['image'])) {
            //var_dump($request->file('image'));
            $path = $request->file('image')->store('public/image');
            $work->image_path = basename($path);
        } else {
            $work->image_path = null;
        }
        
        // delete unnecessary items
        unset($form['_token']);
        unset($form['image']);
        
        // store all data in news table
        $work->fill($form);
        $work->save();
        
        // admin/work/createにリダイレクトする
        return redirect('admin/work');
    }

    public function index(Request $request) {
        
        $cond_title = $request->cond_title;
        //var_dump($request->cond_title);
        if ($cond_title != '') {
            $works = Work::where('title', $cond_title)->get();
        //var_dump($posts);
        } else {
            $works = Work::all();
        }
        
        //\Debugbar::info('デバッガーの情報ですよ');
        
        return view('admin.work.index', ['works' => $works, 'cond_title' => $cond_title]);
    }

    public function edit(Request $request) {
        $work = Work::find($request->id);
        //var_dump($news);
        if (empty($work)) {
            abort(404);
        }
        return view('admin.work.edit', ['work_form' => $work]);
    }
    
    public function update(Request $request) {
        $this->validate($request, Work::$rules);
        
        $work = Work::find($request->id);
        
        $work_form = $request->all();

        if($request->remove == 'true') {
            //dd(Storage::Allfiles('public/image'));
            Storage::delete('public/image/' . $work->image_path);
            $work_form['image_path'] = null;
        } elseif ($request->file('image')) {
            //var_dump($request->file('image'));
            $path = $request->file('image')->store('public/image');
            $work_form['image_path'] = basename($path);
        } else {
            $work_form['image_path'] = $work->image_path;
        }
        
        unset($work_form['image']);
        unset($work_form['remove']);
        unset($work_form['_token']);
        
        $work->fill($work_form)->save();
      
        return redirect('admin/work');
    }
    
    public function delete(Request $request) {
        $work = Work::find($request->id);
        if (isset($work->image_path)) {
            Storage::delete('public/image/' . $work->image_path);
        }
        $work->delete();
        
        Return redirect('admin/work/');
        
    }
}
