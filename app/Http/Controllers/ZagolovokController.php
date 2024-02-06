<?php

namespace App\Http\Controllers;




use App\Http\Requests\ZagolovokRequest;

use App\Models\Audience;
use App\Models\Zagolovok;


class ZagolovokController extends Controller
{
    public function index()
    {
        $zagolovok = Zagolovok::firstOrCreate();
        $audience = Audience::get();
        return view('admin.advantages.zagolovok-create',compact('zagolovok','audience'));
    }
    public function create(ZagolovokRequest $req)
    {
        $zagolovok = Zagolovok::find(1);
        $zagolovok -> head = $req->head;
        $zagolovok -> text = $req->text;
        $zagolovok -> button = $req->button;
        $zagolovok -> link_button = $req->link_button;
        $zagolovok -> telegram = $req->telegram;
        $zagolovok->save();
        return redirect('allaudience');
    }
}
