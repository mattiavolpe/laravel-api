<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        // Bolt Optimization: Replace in-memory mapping with database aggregates
        // Why: Avoids loading entire project collection into memory when only count and ends are needed
        // Impact: Reduces memory usage from O(n) to O(1) and executes faster database-level queries
        $projectsQuery = Auth::user()->projects();
        $totalProjects = (clone $projectsQuery)->count();
        if($totalProjects > 0) {
            $newestProject = (clone $projectsQuery)->latest('id')->first();
            $oldestProject = (clone $projectsQuery)->oldest('id')->first();
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
