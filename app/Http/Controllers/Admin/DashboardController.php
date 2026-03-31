<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        // Optimize by getting aggregate count and extreme records from DB rather than loading all projects into memory
        $projectsQuery = Auth::user()->projects();
        $totalProjects = (clone $projectsQuery)->count();
        if($totalProjects > 0) {
            $newestProject = (clone $projectsQuery)->orderByDesc("id")->first();
            $oldestProject = (clone $projectsQuery)->orderBy("id")->first();
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
