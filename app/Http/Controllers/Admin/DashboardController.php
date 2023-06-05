<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index() {
        $projects = Project::orderBydesc("starting_date")->get();
        $totalProjects = count($projects);
        $newestProject = $projects[0];
        $oldestProject = $projects[$totalProjects - 1];
        return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
    }
}
