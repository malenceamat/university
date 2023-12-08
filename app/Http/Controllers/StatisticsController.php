<?php

namespace App\Http\Controllers;

use App\Http\Requests\StagesRequest;
use App\Http\Requests\StatisticsRequest;
use App\Models\Stages;
use App\Models\Statistics;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index($id = null)
    {
        $statistics = $id ? Statistics::find($id) : new Statistics();
        return view('admin.statistics.statistics-create',compact('statistics'));
    }
    public function create(StatisticsRequest $req)
    {
        Statistics::create($req->all());
        return redirect('/allstatistics');
    }
    public function show()
    {
        $statistics = Statistics::get();
        return view('admin.statistics.allstatistics', compact('statistics'));
    }
    public function update(Request $req)
    {
        $statistics = Statistics::find($req->id);

        $statistics -> head = $req->head;
        $statistics -> text = $req->text;
        $statistics->save();
        return redirect('allstatistics');
    }
    public function delete($id)
    {
        $delete = Statistics::find($id);
        $delete->delete();
        return redirect('allstatistics');
    }
}
