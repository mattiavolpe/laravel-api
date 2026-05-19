<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        // Bolt: Optimized memory usage by replacing collection load with database-level aggregate and limit queries.
        $totalProjects = Auth::user()->projects()->count();
        if($totalProjects > 0) {
            $newestProject = Auth::user()->projects()->orderByDesc("id")->first();
            $oldestProject = Auth::user()->projects()->orderBy("id")->first();
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
