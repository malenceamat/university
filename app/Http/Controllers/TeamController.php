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
    public function main()
    {
        $team = Team::get();
        $partners = partner::get();
        $record = Contact::get();
        $result = Result::get();
        $addit = Additional::get();
        $select = Selection::get();
        $aud = Zagolovok::get();
        $ince = Audience::get();
        $stat = Statistics::get();
        $poss = Possibilities::get();
        $banner = Banner::get();
        $stages = Stages::get();
        $cards = Card::with('TextInCards')->get();

        return view('site.general', compact('team','partners','record','result','addit','select','aud','ince','stat','poss','banner','stages','cards'));
    }

}
