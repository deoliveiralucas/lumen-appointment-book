<?php

namespace PhoneBook\Http\Controllers;

use PhoneBook\Entities\Person;

class IndexController extends Controller
{

    public function index($letter = 'A')
    {
        $people = Person::where('nickname', 'like', $letter . '%')->get();
        return view('phone-book', compact('people'));
    }
}
