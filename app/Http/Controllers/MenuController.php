<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * メニュー画面を表示します。
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('menu.show');
    }
}
