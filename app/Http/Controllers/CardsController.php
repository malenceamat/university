<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Models\Card;
use App\Models\TextInCards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;
use function Sodium\compare;

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

        $helper = new BaseHelperController();
        $data = Card::find($req->id);

        $data->head = $req->head;
        $data->underhead = $req->underhead;
        $data->basic = $req->basic;
        $data->qualification = $req->qualification;
        $data->more = $req->more;

        if (!empty($data) && $req['image'] != null) {
            Storage::disk('public')->delete('image', $data['image']);
            $data['image']  = $helper->store_base64_image($req['image']);
        }


        $data->save();



        return redirect('allcards');
    }
}
