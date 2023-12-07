<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdditionalRequest;
use App\Models\Additional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class AdditionalController extends Controller
{
    public function index()
    {
        $additional = Additional::firstOrCreate();
        return view('admin.additional.additional-create',compact('additional'));
    }
    public function create(AdditionalRequest $req)
    {
        $additional = Additional::find(1);
        $additional->head = $req->head;
        $additional->text = $req->text;

        if (!empty($additional) && $req->hasFile('image')) {
            Storage::disk('public')->delete('image', $additional['image']);
            $image = preg_replace('#^data:image/\w+;base64,#i', '', $req['image']);
            $image = str_replace(' ', '+', $image);
            $fileName = "image/" . Str::random(20) . '.png';

            Storage::disk('public')->put($fileName, base64_decode($image));
            $additional['image'] = $fileName;

        }

        $additional->save();
        return redirect('additional');
    }
}
