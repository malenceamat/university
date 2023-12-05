<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\TextInCards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardsController extends Controller
{
    public function index()
    {
        $card = Card::get();
        return view('admin.allcards',compact('card'));
    }
    public function delete($id)
    {
        $delete = Card::find($id);
        Storage::disk('public')->delete('image', $delete['image']);
        $delete->delete();
        return redirect('/allcards');
    }
    public function edit($id)
    {
        $edit = Card::with('TextInCards')->find($id);


        return view('admin.editcards',compact('edit'));
    }
    public function update(Request $req)
    {
        $data = Card::find($req->id);

        $data->head = $req->head;
        $data->underhead = $req->underhead;
        $data->basic = $req->basic;
        $data->qualification = $req->qualification;

        if ($req->hasFile('image')) {
            $data = $req->file('image');
        }
        $data->save();
        if ($req['image']) {
            if ($req['image'] == $data['image']) {
                Storage::disk('public')->delete('image', $data['image']);
                $data ['image'] =
                    Storage::disk('public')->put('image', $req['body']);
            }
        }
        $data->save();
        return redirect('allcards');
    }
}
