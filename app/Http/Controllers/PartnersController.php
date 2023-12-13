<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\PartnersRequest;

use App\Models\Card;
use App\Models\partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;


class PartnersController extends Controller
{
    public function index($id = null)
    {
        $partners = $id ? partner::find($id) : new Card();
        return view('admin.partners.partners-create', ['partners' => $partners]);
    }
    public function create(PartnersRequest $req)
    {
        $helper = new BaseHelperController();
        $data = $req->all();
        $data['image'] = $helper->store_base64_image($req['image']);
        partner::create($data);
        return redirect('/allpartners');
    }
    public function show()
    {
        $partners = partner::get();
        return view('admin.partners.allpartners',compact('partners'));
    }
    public function delete($id)
    {
        $delete = partner::find($id);
        Storage::disk('public')->delete('image', $delete['image']);
        $delete->delete();
        return redirect('/allpartners');
    }
    public function update(PartnersRequest $req)
    {

        $helper = new BaseHelperController();
        $data = partner::find($req->id);

        if (!empty($data) && $req['image'] != null) {
            Storage::disk('public')->delete('image', $data['image']);
            $data['image']  = $helper->store_base64_image($req['image']);
        }
        $data->save();
        return redirect('allpartners');
    }
}
