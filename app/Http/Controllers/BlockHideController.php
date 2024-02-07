<?php

namespace App\Http\Controllers;

use App\Models\BlockHide;
use Illuminate\Http\Request;

class BlockHideController extends Controller
{
    public function index()
    {
        $data = BlockHide::firstOrCreate();
        return view('admin.hide.hide',compact('data'));
    }
}
