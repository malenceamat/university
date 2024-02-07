<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\Contactrequest;
use App\Models\Audience;
use App\Models\Contact;
use App\Models\Form;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Sodium\compare;

class ContactController extends Controller
{
    public function index()
    {
        $data = Form::get();
        $contact = Contact::firstOrCreate();
        return view('admin.contact.contact-create',compact('contact','data'));
    }
    public function create(Contactrequest $req)
    {
        $contact = Contact::find(1);
        $contact->email = $req->email;
        $contact->phone = $req->phone;

        $contact->save();
        return redirect('contact');
    }
    public function contact(Request $req)
    {
        Form::create($req->all());
        return back();
    }
    public function delete($id)
    {
        $delete = Form::find($id);
        $delete->delete();
        return redirect('/contact');
    }
}
