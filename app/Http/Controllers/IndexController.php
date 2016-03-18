<?php

namespace LumenDiary\Http\Controllers;

use LumenDiary\Entities\Person;

class IndexController extends Controller
{

    public function index($letter = 'A')
    {
        $people = Person::where('nickname', 'like', $letter . '%')->get();
        return view('diary', compact('people'));
    }
}
