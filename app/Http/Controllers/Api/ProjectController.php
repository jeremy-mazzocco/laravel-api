<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projectsList()
    {
        $projects = Project::all();

        return response()->json([
            'projects' => $projects
        ]);
    }

    public function projectIndexPage()
    {

        $projects = Project::paginate(3);

        return response()->json([
            'projects' => $projects
        ]);
    }
}
