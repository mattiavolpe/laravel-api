<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $totalProjects = Auth::user()->projects()->count();
        if($totalProjects > 0) {
            // ⚡ Bolt: Get only required records from database instead of loading all into memory
            $newestProject = Auth::user()->projects()->latest("id")->first();
            $oldestProject = Auth::user()->projects()->oldest("id")->first();
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
