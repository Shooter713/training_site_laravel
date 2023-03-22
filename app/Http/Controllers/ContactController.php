<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth;

class ContactController extends Controller{

//    public function submit(ContactRequest $request) {
//
////        $validation = $request->validate([
////           'subject' => 'required|min:5|max:50',
////           'message' => 'required|min:15|max:500'
////        ]);
//
//   }

    public function submit(ContactRequest $request){

        $contact = new Contact();
        $contact->name    = $request->input('name');
        $contact->email   = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Повідомлення було добавлено');

    }

    public function add(Request $request){

        $contact = new User();
        $contact->name       = $request->input('user-name');
        $contact->email      = $request->input('user-email');
        $contact->password   = Hash::make($request->input('user-password'));

        $contact->save();
//        return dd($request);
        return redirect()->route('home')->with('success', 'Дякуємо за реєстрацію');

    }


    public function allData(){

        $contact = new Contact;
        return view('messages', ['data' => $contact->all()]);


//        Contact::all();

//        $contact = new Contact;
//        $contact->all();
    }

    public function showOneMessage($id){

        $contact = new Contact;
        return view('one-messages', ['data' => $contact->find($id)]);

    }

    public function updateMessage($id){

        $contact = new Contact;
        return view('contact-data-update', ['data' => $contact->find($id)]);

    }

    public function updateMessageSubmit($id, ContactRequest $request){

        $contact = Contact::find($id);
        $contact->name    = $request->input('name');
        $contact->email   = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Повідомлення було обновлено');

    }

    public function deleteMessage($id){

        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Повідомлення було видалено');

    }

}
