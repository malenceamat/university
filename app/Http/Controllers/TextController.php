<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\TextRequest;
use App\Models\Card;
use App\Models\TextInCards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;
use Str;

class TextController extends Controller
{
    public function index($id = null)
    {
        $card = $id ? Card::find($id) : new Card();

        return view('admin.cards.cards', ['card' => $card]);
    }
    public function save(TextRequest $req)
    {
        $helper = new BaseHelperController(); // 1

        $data = $req->all();
        $bit_data = [];
        foreach ($data['text'] as $text) {
            $bit_data[] = ['text' => $text];
        }

        $data['image'] = $helper->store_base64_image($req['image']); // 2

        Card::create($data)->TextInCards()->createMany($bit_data); // 3

        return redirect('/allcards');
    }
}

