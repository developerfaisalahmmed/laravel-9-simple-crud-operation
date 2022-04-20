<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('contact.index',compact('contacts'));
    }

    public function create(){

        return view('contact.create');
    }
    public function store(Request $request){

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->save();
        $notification = array(
            'message' => 'New Contact Successfully Save',
            'alert-type' => 'success'
        );
        return redirect()->route('contact.index')->with($notification);
    }


    public function edit($id){
        $contact = Contact::findOrFail($id);
        return view('contact.edit',compact('contact'));
    }
    public function update(Request $request , $id){
        $contact = Contact::findOrFail($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->save();

        $notification = array(
            'message' => 'Contact Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('contact.index')->with($notification);
    }


    public function delete($id){
        $contact = Contact::findOrFail($id);

        $notification = array(
            'message' => 'Contact Delete Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('contact.index')->with($notification);
    }

}
