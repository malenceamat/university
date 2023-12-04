<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
        $card = Card::get();

        return view('admin.allcards',compact('card'));
    }
}
