<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use App\Models\Program;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamGroupController extends Controller
{
    public function index($id = null)
    {
        $programs = $id ? Program::find($id) : new Program();
        $teams = Team::get();
        return view('admin.team.team_group',compact('teams','programs'));
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
    public function update(Request $req)
    {
       // tap(Program::find($req->id), fn($program) => $program->update($req->all()))->teachers()->sync($req->teacher); код в одну строчку
       // делает тоже самое что и строчки ниже

        Program::find($req->id)->update($req->all());
        Program::find($req->id)->teachers()->sync($req->teacher);
        return redirect('/allteam');
    }
}
