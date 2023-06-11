<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    const LP_ROW_COUNT = 3;  // LPに表示されるnewsの件数を設定する。

    public function index_lp(Request $request)
    {
        $current_date = now();
        $posts = News::orderBy('dated_at', 'desc')->where('dated_at', '<', now())->take(self::LP_ROW_COUNT)->get();

        // top.blade.php ファイルを渡している
        // また View テンプレートに posts、という変数を渡している
        return view('top', ['posts' => $posts]);
    }
}