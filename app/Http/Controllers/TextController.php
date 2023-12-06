<?php

namespace App\Http\Controllers;


use App\Http\Requests\TextRequest;
use App\Models\Card;
use App\Models\TextInCards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;

class TextController extends Controller
{
    public function index($id = null)
    {
        $card = $id ? Card::find($id) : new Card();
        return view('admin.cards.cards', ['card' => $card]);
    }
    public function save(TextRequest $req)
    {
        $data = $req->all();
        $bit_data = [];
        foreach ($data['text'] as $text) {
            $bit_data[] = ['text' => $text];
        }
        $data['image'] = Storage::disk('public')->put('image', $req->file('image'));
        Card::create($data)->TextInCards()->createMany($bit_data);

        return redirect('/allcards');
    }
}

