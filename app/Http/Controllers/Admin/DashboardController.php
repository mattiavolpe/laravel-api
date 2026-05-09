<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        // ⚡ Bolt Optimization: Use database-level queries instead of fetching all records into memory
        $totalProjects = Auth::user()->projects()->count();
        if($totalProjects > 0) {
            $newestProject = Auth::user()->projects()->latest("id")->first();
            $oldestProject = Auth::user()->projects()->oldest("id")->first();
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
