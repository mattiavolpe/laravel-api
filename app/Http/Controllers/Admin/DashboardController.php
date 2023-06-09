<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $projects = Auth::user()->projects()->orderByDesc("id")->get();
        $totalProjects = count($projects);
        if($totalProjects > 0) {
            $newestProject = $projects[0];
            $oldestProject = $projects[$totalProjects - 1];
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
