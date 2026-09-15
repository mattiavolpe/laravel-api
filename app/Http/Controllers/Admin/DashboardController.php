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

        // ⚡ Bolt: Execute count query directly at database level instead of loading full collection into memory
        $totalProjects = (clone $query)->count();

        if($totalProjects > 0) {
            // ⚡ Bolt: Fetch only the needed records directly from the database using latest/oldest
            $newestProject = (clone $query)->latest('id')->first();
            $oldestProject = (clone $query)->oldest('id')->first();
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
