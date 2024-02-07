<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BlockHide;
use Illuminate\Http\Request;

class BlockHideController extends Controller
{
    public function index()
    {
        $data = BlockHide::first();
        return view('admin.hide.hide',compact('data'));
    }
    public function create(Request $req)
    {
        $hide = BlockHide::find(1);
        $hide->banner_hide = $req->banner_hide ?? false;
        $hide->partners_hide = $req->partners_hide ?? false;
        $hide->about_us_hide = $req->about_us_hide ?? false;
        $hide->advantagesh = $req->advantagesh ?? false;
        $hide->gives_hide = $req->gives_hide ?? false;
        $hide->stages_hide = $req->stages_hide ?? false;
        $hide->programs_hide= $req->programs_hide ?? false;
        $hide->faqs_hide = $req->faqs_hide ?? false;
        $hide->contact_hide= $req->contact_hide ?? false;
        $hide->teacher_hide = $req->teacher_hide ?? false;

        $hide->save();
        return redirect('/hide');
    }
}
