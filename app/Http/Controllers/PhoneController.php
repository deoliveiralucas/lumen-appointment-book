<?php

namespace PhoneBook\Http\Controllers;

use PhoneBook\Entities\Phone;

class PhoneController extends Controller
{

    public function delete($id)
    {
        $phone = Phone::find($id);
        $person = $phone->person;

        return view('phone.delete', compact('person', 'phone'));
    }

    public function destroy($id)
    {
        Phone::destroy($id);

        return redirect()->route('phonebook.index');
    }
}
