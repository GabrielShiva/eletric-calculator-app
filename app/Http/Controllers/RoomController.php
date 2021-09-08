<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Project;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create(int $id)
    {
        $project = Project::find($id);

        if (! $project) {
            return 'projeto não existe!';
        }

        return view('room.create', ['project' => $project]);
    }

    public function store(Request $request, int $id)
    {
        $project = Project::find($id);

        if (! $project) {
            return 'projeto não existe!';
        }

        $room = Room::create([
            'project_id' => $project->id,
            'name' => $request->name,
            'length' => $request->length,
            'width' => $request->width,
            'area' => ($request->length * $request->width),
            'perimeter' => (($request->length * 2) + ($request->width * 2))
        ]);

        return redirect()->route('project.show', ['id' => $project->id]);
    }

    public function destroy(int $id)
    {
        $room = Room::find($id);

        if (! $room) {
            return 'Cômodo não encotrado!';
        }

        $projectId = $room->project_id; 
        $deleted = $room->delete();

        if (! $deleted) {
            return 'Falha ao deletar o cômodo!';
        }

        return redirect()->route('project.show', ['id' => $projectId]);
    }
}
