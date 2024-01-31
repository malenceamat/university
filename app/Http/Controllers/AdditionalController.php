<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
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
        $helper = new BaseHelperController();

        $additional = Additional::find(1);
        $additional->head = $req->head;
        $additional->text = $req->text;
        $additional->hideblock = $req->hideblock ?? false;


        if (!empty($additional) && $req['image'] != null) {
            Storage::disk('public')->delete('image', $additional['image']);

            $additional['image']  = $helper->store_base64_image($req['image']);




        }

        $additional->save();
        return redirect('additional');
    }
}
