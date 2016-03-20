<?php

namespace PhoneBook\Http\Controllers;

use PhoneBook\Entities\Person;
use Illuminate\Http\Request;

class PhoneBookController extends Controller
{

    public function index($letter = 'A')
    {
        $people = Person::where('nickname', 'like', $letter . '%')->get();
        return view('phone-book', compact('people'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $people = [];
        if (! empty($search)) {
            $people = Person::where('name', 'like', '%' . $search . '%')
                ->orWhere('nickname', 'like', '%' . $search . '%')
                ->get();
        }
        return view('phone-book', compact('people'));
    }
}
