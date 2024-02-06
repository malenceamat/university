<?php

namespace App\Http\Controllers;

use App\Http\Requests\StagesRequest;
use App\Models\Stages;
use Illuminate\Http\Request;


class StagesController extends Controller
{
    public function index($id = null)
    {
        $stage = $id ? Stages::find($id) : new Stages();
        return view('admin.stages.stages-create',compact('stage'));
    }
    public function create(StagesRequest $req)
    {
        Stages::create($req->all());
        return redirect('/allstages');
    }
    public function show()
    {
        $stage = Stages::orderBy('id','asc')->get();
        return view('admin.stages.allstages', compact('stage'));
    }
    public function update(Request $req)
    {
        $stage = Stages::find($req->id);

        $stage -> date = $req->date;
        $stage -> stages = $req->stages;
        $stage->save();
        return redirect('allstages');
    }
    public function delete($id)
    {
        $delete = Stages::find($id);
        $delete->delete();
        return redirect('allstages');
    }
}
