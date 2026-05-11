<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        // Optimize: use database-level counts instead of loading entire collection to memory
        $totalProjects = Auth::user()->projects()->count();
        if($totalProjects > 0) {
            // Optimize: retrieve only needed edges efficiently
            $newestProject = Auth::user()->projects()->orderByDesc("id")->first();
            $oldestProject = Auth::user()->projects()->orderBy("id")->first();
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
