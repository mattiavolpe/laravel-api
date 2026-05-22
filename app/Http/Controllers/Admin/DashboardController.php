<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        // ⚡ Bolt: Optimize by using database-level aggregations and retrieve only needed records instead of pulling all projects into memory
        $projectsQuery = clone Auth::user()->projects();
        $totalProjects = $projectsQuery->count();
        if($totalProjects > 0) {
            $newestProject = (clone $projectsQuery)->latest('id')->first();
            $oldestProject = (clone $projectsQuery)->oldest('id')->first();
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
