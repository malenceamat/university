<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\TeamRequest;
use App\Models\Additional;
use App\Models\Audience;
use App\Models\Banner;
use App\Models\Card;
use App\Models\Contact;
use App\Models\partner;
use App\Models\Possibilities;
use App\Models\Result;
use App\Models\Selection;
use App\Models\Stages;
use App\Models\Statistics;
use App\Models\Team;
use App\Models\TextInCards;
use App\Models\Zagolovok;
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
        $helper = new BaseHelperController();
        $team = Team::find($req->id);
        $team -> fio = $req->fio;
        $team -> job = $req->job;
        $team -> merits = $req->merits;

        if (!empty($team) && $req['image'] != null) {
            Storage::disk('public')->delete('image', $team['image']);
            $team['image']  = $helper->store_base64_image($req['image']);
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
