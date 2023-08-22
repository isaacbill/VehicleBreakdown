<?php
namespace App\Http\Controllers;
use App\Models\Contact2;
use Mail; 
use Illuminate\Http\Request;

class Contact1Controller extends Controller
{
     public function getContact() { 

       return view('contact-us1'); 
     } 
      public function saveContact(Request $request) { 

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact2;
         $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        \Mail::send('contact-email1',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('isaabill247@gmail.com');
               });
        
        return back()->with('success', 'Message sent!');

    }
}
