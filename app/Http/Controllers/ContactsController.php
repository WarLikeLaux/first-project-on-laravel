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
        return view('admin.messages', ['data' => $contacts->all()]);
    }

    public function oneMessage($id)
    {
        $contacts = new Contact();
        return view('admin.message', ['data' => $contacts->find($id)]);
    }

    public function updateMessage($id)
    {
        $contacts = new Contact();
        return view('admin.update-message', ['data' => $contacts->find($id)]);
    }

    public function updateMessageSubmit($id, ContactsRequest $req)
    {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('admin-contacts-message', $id)->with('success', 'Сообщение была обновлено');
    }

    public function deleteMessage($id)
    {
        if (Contact::find($id) !== null) {
            Contact::find($id)->delete();
        }
        return redirect()->route('admin-contacts-messages')->with('success', 'Сообщение было удалено');
    }
}
