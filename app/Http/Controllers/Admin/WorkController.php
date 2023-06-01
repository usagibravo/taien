<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    // Workを作成、更新、削除するメソッドの定義
    public function add() {
        return view(admin.work.create);
    }
    
    public function create() {
        return redirect(admin/work/create);
    }

    public function edit() {
        return view(admin.work.edit);
    }

    public function update() {
        return redirect(admin/work/edit);
    }}
