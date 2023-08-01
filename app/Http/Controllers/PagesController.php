<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        // return phpinfo();
        return view('pages.root');
    }
}
