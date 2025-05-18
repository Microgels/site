<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use App\Models\Contact;
use Livewire\Component;
use Mail;
use Illuminate\Http\Request;

class GetInTach extends Component
{
    public $contact_name, $contact_email, $contact_message;

    protected $rules = [
        'contact_name' => ['required','string'],
        'contact_email' => ['required','email'],
        'contact_message' => ['required','string'],
    ];
    public function contact(Request $request)
    {
        $this->validate();

        $contact = new Contact();
        $contact->contact_name = $this->contact_name;
        $contact->contact_email = $this->contact_email;
        $contact->contact_message = $this->contact_message;
        $contact->save();

        Mail::to(env('MAIL_USERNAME'))->send(new ContactMail($contact));

        session()->flash("alert", [
            'type' => "success",
            'text' => "Message sent to us ! Thanks."
        ]);
        $this->reset(['contact_name','contact_email','contact_message']);
    }
    public function render()
    {
        return view('livewire.get-in-tach');
    }
}
