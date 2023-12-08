<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class TeamController extends Controller
{
    public function index($id = null)
    {
        $team = $id ? Team::find($id) : new Team();
        return view('admin.team.team-create', compact('team'));
    }
    public function create(TeamRequest $req)
    {
        $helper = new BaseHelperController();
        $data = $req->all();
        $data['image'] = $helper->store_base64_image($req['image']);
        Team::create($data);
        return redirect('/allteam');
    }
    public function show()
    {
        $team = Team::get();
        return view('admin.team.allteam',compact('team'));
    }
    public function update(Request $req)
    {
        $team = Team::find($req->id);

        $team -> head = $req->head;
        $team -> fio = $req->fio;
        $team -> job = $req->job;
        $team -> merits = $req->merits;
        if($req['image']){
            if($req['image']!=$team['image']){
                Storage::disk('public')->delete('image', $team['image']);


                $image = preg_replace('#^data:image/\w+;base64,#i', '', $req['image']);
                $image = str_replace(' ', '+', $image);
                $fileName = "image/" . Str::random(20) . '.png';

                Storage::disk('public')->put($fileName, base64_decode($image));
                $team['image'] = $fileName;
            }
        }
        $team->save();
        return redirect('allteam');
    }
    public function delete($id)
    {
        $delete = Team::find($id);
        $delete->delete();
        return redirect('allteam');
    }
}
