<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Room;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function home()
    {
        $projects = Project::all() ?? null;

        return view('project.home', ['projects' => $projects]);
    }

    public function show(int $id)
    {
        $project = Project::with('rooms')->find($id);

        return view('project.show', ['project' => $project]);
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        $project = Project::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $projects = Project::all() ?? null;

        return redirect()->route('room.create', ['id' => $project->id]);
    }
}
