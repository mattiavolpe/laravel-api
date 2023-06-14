<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::with(["technologies", "type", "user"])->orderByDesc("starting_date")->paginate(6);
        return response()->json([
            "success" => true,
            "projects" => $projects
        ]);
    }

    public function show($slug) {
        $project = Project::with(["technologies", "type", "user"])->where("slug", $slug)->first();
        if($project) {
            return response()->json([
                "success" => true,
                "project" => $project,
            ]);
        } else {
            return response()->json([
                "success" => false,
            ]);
        }
    }
}
