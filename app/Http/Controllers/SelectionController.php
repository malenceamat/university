<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\SelectionRequest;
use App\Models\Card;
use App\Models\Selection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class SelectionController extends Controller
{
    public function index($id = null)
    {
        $selection = $id ? Selection::find($id) : new Selection();
        return view('admin.selection.selection-create',compact('selection'));
    }
    public function create(SelectionRequest $req)
    {
        $helper = new BaseHelperController();
        $data = $req->all();
        $data['image'] = $helper->store_base64_image($req['image']);
        Selection::create($data);


        return redirect('/selection');
    }
    public function show()
    {
        $selection = Selection::get();
        return view('admin.selection.allselection',compact('selection'));
    }
    public function delete($id)
    {
        $delete = Selection::find($id);
        Storage::disk('public')->delete('image', $delete['image']);
        $delete->delete();
        return redirect('/allsection');
    }
    public function update(Request $req)
    {
        $helper = new BaseHelperController();
        $data = Selection::find($req->id);

        $data->head = $req->head;
        $data->text = $req->text;
        $data->button = $req->button;
        $data->url = $req->url;

        if($req['image']){
            if($req['image']!=$data['image']){
                Storage::disk('public')->delete('image', $data['image']);
                $data['image']  = $helper->store_base64_image($req['image']);
            }
        }
        $data->save();
        return redirect('allselection');
    }
}
