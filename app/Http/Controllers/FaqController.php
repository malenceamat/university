<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Question;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::get();
        return view('admin.faqs.allpossibilities',compact('faq'));
    }
    public function create(Request $req)
    {
        Faq::create($req->all());
        return redirect('/faq');
    }
    public function delete($id)
    {
        $delete = Faq::find($id);
        $delete->delete();
        return redirect('/faq');
    }
    public function show(Request $req)
    {
        $faq = Faq::find($req->id);
        $temp = $faq->ques;
        return view('admin.faqs.possibilities-create',compact('faq','temp'));
    }
    public function question(Request $req)
    {
         $data =  Question::create($req->all());
         $data->faq_id = $req->id;
         $data->save();
         return redirect('/faq');
    }
    public function delete_ask($id)
    {

        $delete = Question::find($id);
        $delete->delete();
        return redirect('/faq');
    }
}
