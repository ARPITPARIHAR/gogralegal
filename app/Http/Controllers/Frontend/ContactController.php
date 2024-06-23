<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'mail' => 'required|email|max:256',
            'message' => 'required|string',
        ]);

        $contact = new Contact;
        $contact->first_name = $request->name;
        $contact->phone_number = $request->phone;
        $contact->email = $request->mail;
        $contact->message = $request->message;
        $contact->save();

        $request->session()->flash('success', 'THANKING YOU!  Your Message has sent successfully');

        // Redirect back to the form
        return redirect()->back();
    }
}
