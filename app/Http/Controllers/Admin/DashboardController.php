<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $projectsQuery = Auth::user()->projects();
        $totalProjects = (clone $projectsQuery)->count();
        if($totalProjects > 0) {
            // ⚡ Bolt: Optimize Eloquent queries
            $newestProject = (clone $projectsQuery)->latest("id")->first();
            $oldestProject = (clone $projectsQuery)->oldest("id")->first();
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
