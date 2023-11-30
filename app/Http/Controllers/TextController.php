<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\TextInCards;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class TextController extends Controller
{
    public function index()
    {
        return view('admin.main');
    }
    function insert(Request $request)
    {
        if ($request->ajax()) {
            $rules = array(
                'text.*' => 'required'
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json([
                    'error' => $error->errors()->all()
                ]);
            }
            $text = $request->text;
            for ($count = 0; $count < count($text); $count++) {
                $data = array(
                    'first_name' => $text[$count]
                );
                $insert_data[] = $data;
            }
            TextInCards::insert($insert_data);
            return response()->json([
                'success' => 'Data Added successfully.'
            ]);
        }
    }
    public function save(Request $req)
    {
        $bit_data = [];
        foreach ($req->text as $text) {
            $bit_data[] = ['text' => $text];
        }
        $req->image = Storage //todo
        Card::create($req->all())->TextInCards()->createMany($bit_data);
        return view //todo










    }
}

