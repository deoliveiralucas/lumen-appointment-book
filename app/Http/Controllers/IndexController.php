<?php

namespace LumenDiary\Http\Controllers;

class IndexController extends Controller
{

    public function index()
    {
        return view('layout');
    }
}
