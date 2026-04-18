<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        // ⚡ Bolt: Use database-level count instead of loading all projects into a collection
        $totalProjects = Auth::user()->projects()->count();

        if($totalProjects > 0) {
            // ⚡ Bolt: Fetch only the specific projects needed
            $newestProject = Auth::user()->projects()->orderByDesc("id")->first();
            $oldestProject = Auth::user()->projects()->orderBy("id")->first();

            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
