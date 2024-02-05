<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\BannersRequest;
use App\Models\Banner;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannersController extends Controller
{
    public function index()
    {
        $banner = Banner::firstOrCreate();
        return view('admin.banner.banner-create',compact('banner'));
    }
    public function create(BannersRequest $req)
    {
        $helper = new BaseHelperController();
        $banner = Banner::find(1);
        $banner->button = $req->button;
        $banner->emailbutton = $req->emailbutton;
        $banner->text = $req->text;
        $banner->smalltext = $req->smalltext;
        $banner->secondbutton = $req->secondbutton;

        if (!empty($banner) && $req['image'] != null) {
            Storage::disk('public')->delete('image', $banner['image']);
            $banner['image']  = $helper->store_base64_image($req['image']);
        }

        $banner->save();
        return redirect('banner');
    }
}
