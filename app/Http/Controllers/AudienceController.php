<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\AudienceRequest;
use App\Http\Requests\TeamRequest;
use App\Models\Audience;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AudienceController extends Controller
{
    public function index($id = null)
    {
        $audience = $id ? Audience::find($id) : new Audience();
        return view('admin.audience.audience-create', compact('audience'));
    }
    public function create(AudienceRequest $req)
    {
        $helper = new BaseHelperController();
        $data = $req->all();
        $data['image'] = $helper->store_base64_image($req['image']);
        Audience::create($data);
        return redirect('/allaudience');
    }
    public function update(Request $req)
    {
        $helper = new BaseHelperController();

        $audience = Audience::find($req->id);
        $audience -> head = $req->head;
        $audience -> text = $req->text;

        if($req['image']){
            if($req['image']!=$audience['image']){
                Storage::disk('public')->delete('image', $audience['image']);
                $audience['image']  = $helper->store_base64_image($req['image']);
            }
        }

        $audience->save();
        return redirect('/allaudience');
    }
    public function delete($id)
    {
        $delete = Audience::find($id);
        $delete->delete();
        return redirect('/allaudience');
    }
}
