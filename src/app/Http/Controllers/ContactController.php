<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
        {
        return view('index');
        }

        public function confirm(ContactRequest $request)
        {
            $contact = $request->only(['last_name','first_name', 'gender', 'email','tel','address1','address2', 'select' , 'content']);

            return view('confirm' , ['contact' => $contact]);
        }
        public function store(ContactRequest $request)
        {
            $contact =$request->only(['last_name','first_name', 'gender', 'email','tel','address1','address2','select' , 'content']);

            Contact::create($contact);

            return view('thanks');
        }





        public function thanks()
        {
        return view('thanks');
        }
}


