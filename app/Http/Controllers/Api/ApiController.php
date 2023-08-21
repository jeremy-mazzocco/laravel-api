<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;


class ApiController extends Controller
{
    public function projectsList()
    {
        $projects = Project::all();

        return response()->json([
            'projects' => $projects
        ]);
    }
}
