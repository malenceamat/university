<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\PossibilitiesRequest;
use App\Models\Possibilities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class PossibilitiesController extends Controller
{
    public function index($id = null)
    {
        $possibilities = $id ? Possibilities::find($id) : new Possibilities();
        return view('admin.possibilities.possibilities-create',compact('possibilities'));
    }
    public function create(PossibilitiesRequest $req)
    {
        $helper = new BaseHelperController();
        $data = $req->all();
        $data['image'] = $helper->store_base64_image($req['image']);
        Possibilities::create($data);
        return redirect('/allpossibilities');
    }
    public function show()
    {
        $possibilities = Possibilities::get();
        return view('admin.possibilities.allpossibilities', compact('possibilities'));
    }
    public function update(Request $req)
    {
        $helper = new BaseHelperController();

        $possibilities = Possibilities::find($req->id);
        $possibilities -> text = $req->text;

        if (!empty($possibilities) && $req['image'] != null) {
            Storage::disk('public')->delete('image', $possibilities['image']);
            $possibilities['image']  = $helper->store_base64_image($req['image']);
        }

        $possibilities->save();
        return redirect('allpossibilities');
    }
    public function delete($id)
    {
        $delete = Possibilities::find($id);
        $delete->delete();
        return redirect('allpossibilities');
    }
}
