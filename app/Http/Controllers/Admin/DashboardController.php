<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        // Optimize: Use DB aggregate functions instead of loading all projects into memory
        // Query builder is cloned to avoid cross-pollution across aggregate queries
        $projectsQuery = Auth::user()->projects();
        $totalProjects = (clone $projectsQuery)->count();

        if($totalProjects > 0) {
            // Retrieve only the specific records needed
            $newestProject = (clone $projectsQuery)->latest('id')->first();
            $oldestProject = (clone $projectsQuery)->oldest('id')->first();
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
