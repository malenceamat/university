<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\AdditionalRequest;
use App\Http\Requests\SelectionRequest;
use App\Models\Additional;
use App\Models\Selection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class SelectionController extends Controller
{
    public function index()
    {
        $select = Selection::firstOrCreate();
        return view('admin.selection.selection-create',compact('select'));
    }
    public function create(SelectionRequest $req)
    {
        $helper = new BaseHelperController();

        $select = Selection::find(1);
        $select->head = $req->head;
        $select->text = $req->text;
        $select->button = $req->button;
        $select->url = $req->url;

        if (!empty($select) && $req['image'] != null) {
            Storage::disk('public')->delete('image', $select['image']);

            $select['image']  = $helper->store_base64_image($req['image']);
        }

        $select->save();
        return redirect('selection');
    }
}
