<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\TextInCards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class CardsController extends Controller
{
    public function index()
    {
        $card = Card::get();
        return view('admin.cards.allcards',compact('card'));
    }
    public function delete($id)
    {
        $delete = Card::find($id);
        Storage::disk('public')->delete('image', $delete['image']);
        $delete->delete();
        return redirect('/allcards');
    }
    public function update(Request $req)
    {
        $data = Card::find($req->id);

        $data->head = $req->head;
        $data->underhead = $req->underhead;
        $data->basic = $req->basic;
        $data->qualification = $req->qualification;

        if($req['image']){
            if($req['image']!=$data['image']){
                Storage::disk('public')->delete('image', $data['image']);


                $image = preg_replace('#^data:image/\w+;base64,#i', '', $req['image']);
                $image = str_replace(' ', '+', $image);
                $fileName = "image/" . Str::random(20) . '.png';

                Storage::disk('public')->put($fileName, base64_decode($image));
                $data['image'] = $fileName;
            }
        }

        $data->save();
        return redirect('allcards');
    }
}
