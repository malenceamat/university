<?php

namespace App\Http\Controllers;

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
use App\Models\Zagolovok;


class ShowController extends Controller
{
    public function show()
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
        $stages = Stages::orderBy('number','asc')->get();
        $cards = Card::with('TextInCards')->get();

        return view('site.general', compact('team','partners','record','result','addit','select','aud','ince','stat','poss','banner','stages','cards'));
    }
}
