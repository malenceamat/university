<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\Contactrequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::firstOrCreate();
        return view('admin.contact.contact-create',compact('contact'));
    }
    public function create(Contactrequest $req)
    {
        $helper = new BaseHelperController();

        $contact = Contact::find(1);
        $contact->email = $req->email;
        $contact->text = $req->text;
        $contact->buttontext = $req->buttontext;
        $contact->button = $req->button;

        if (!empty($contact) && $req['image'] != null) {
            Storage::disk('public')->delete('image', $contact['image']);
            $contact['image']  = $helper->store_base64_image($req['image']);
        }

        $contact->save();
        return redirect('contact');
    }
}
