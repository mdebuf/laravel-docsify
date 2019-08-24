<?php

namespace Mdebuf\Docsify\Http\Controllers;

use Log;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DocsifyController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::debug(__METHOD__);
        Log::debug(config('docsify.route'));

        return view('docsify::docs');
    }

    public function get($path)
    {
        Log::debug(__METHOD__);

        return response()->file(base_path('docs/'.$path));
    }
}
