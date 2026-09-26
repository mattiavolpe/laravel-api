<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $query = Auth::user()->projects();
        // ⚡ Bolt: Use database-level count instead of loading all records into memory
        $totalProjects = (clone $query)->count();
        if($totalProjects > 0) {
            // ⚡ Bolt: Fetch only the newest and oldest projects directly from the database
            $newestProject = (clone $query)->latest('id')->first();
            $oldestProject = (clone $query)->oldest('id')->first();
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
