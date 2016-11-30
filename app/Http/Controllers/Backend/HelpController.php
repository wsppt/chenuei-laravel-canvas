<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class HelpController extends Controller
{
    /**
     * Display the help page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.help.index');
    }
}
