<?php

namespace Wave\Http\Controllers;

class DashboardController extends \App\Http\Controllers\Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('theme::dashboard.index');
        // return view('theme::pricing');
    }
}
