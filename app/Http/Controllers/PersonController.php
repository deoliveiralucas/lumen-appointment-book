<?php

namespace PhoneBook\Http\Controllers;

use PhoneBook\Entities\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonController extends Controller
{

    public function create()
    {
        return view('person.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255|unique:people',
            'nickname' => 'required|min:2|max:50',
            'gender' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('person.create')
                ->withErrors($validator)
                ->withInput()
            ;
        }

        $person = Person::create($request->all());
        $letter = strtoupper(substr($person->nickname, 0, 1));

        return redirect()->route('phonebook.letter', ['letter' => $letter]);
    }

    public function edit($id)
    {
        $person = Person::find($id);

        return view('person.edit', compact('person'));
    }

    public function update(Request $request, $id)
    {
        $person = Person::find($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255|unique:people,name,' . $person->id,
            'nickname' => 'required|min:2|max:50',
            'gender' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('person.create')
                ->withErrors($validator)
                ->withInput()
            ;
        }

        $person->fill($request->all())->save();
        $letter = strtoupper(substr($person->nickname, 0, 1));

        return redirect()->route('phonebook.letter', ['letter' => $letter]);
    }

    public function delete($id)
    {
        $person = Person::find($id);

        return view('person.delete', compact('person'));
    }

    public function destroy($id)
    {
        Person::destroy($id);

        return redirect()->route('phonebook.index');
    }
}
