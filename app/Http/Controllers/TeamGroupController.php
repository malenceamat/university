<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamGroupController extends Controller
{
    public function index()
    {
        $teams = Team::get();
        return view('admin.team.team_group',compact('teams'));
    }
    public function create(Request $req)
    {
        Program::create($req->all())->teachers()->attach($req->teacher);
        return redirect('/allteam');
    }
    public function show()
    {
        $programs = Program::get();
        return view('admin.team.program_team',compact('programs'));
    }
    public function delete($id)
    {
        Program::find($id)->teachers()->detach();
        Program::find($id)->delete();
        return redirect()->back();
    }
}
