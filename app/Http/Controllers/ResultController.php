<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\ResultRequest;
use App\Models\Result;
use Illuminate\Support\Facades\Storage;
use Str;

class ResultController extends Controller
{
    public function index()
    {
        $result = Result::firstOrCreate();
        return view('admin.results.results-create',compact('result'));
    }
    public function create(ResultRequest $req)
    {
        $helper = new BaseHelperController();
        $result = Result::find(1);
        $result->head = $req->head;
        $result->text = $req->text;

        if (!empty($result) && $req['image'] != null) {
            Storage::disk('public')->delete('image', $result['image']);
            $result['image']  = $helper->store_base64_image($req['image']);
        }
        $result->save();
        return redirect('result');
    }
}
