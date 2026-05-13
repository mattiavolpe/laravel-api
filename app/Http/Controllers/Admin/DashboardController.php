<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        // ⚡ Bolt: Query database directly instead of loading all projects into memory
        $totalProjects = Auth::user()->projects()->count();
        if($totalProjects > 0) {
            $newestProject = clone Auth::user()->projects();
            $newestProject = $newestProject->latest('id')->first();
            $oldestProject = clone Auth::user()->projects();
            $oldestProject = $oldestProject->oldest('id')->first();
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
