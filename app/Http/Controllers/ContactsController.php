<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function submit(ContactsRequest $req)
    {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение было отправлено');
    }

    public function allMessages()
    {
        $contacts = new Contact();
        // $contacts->orderBy('id', 'asc')->skip(1)->take(1)->get()
        // $contacts->where('subject', '=', 'Здравствуйте')->get()
        return view('messages', ['data' => $contacts->all()]);
    }

    public function oneMessage($id)
    {
        $contacts = new Contact();
        return view('message', ['data' => $contacts->find($id)]);
    }

    public function updateMessage($id)
    {
        $contacts = new Contact();
        return view('update-message', ['data' => $contacts->find($id)]);
    }

    public function updateMessageSubmit($id, ContactsRequest $req)
    {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-message', $id)->with('success', 'Сообщение была обновлено');
    }

    public function deleteMessage($id)
    {
        Contact::find($id)->delete();

        return redirect()->route('contact-messages')->with('success', 'Сообщение было удалено');
    }
}
