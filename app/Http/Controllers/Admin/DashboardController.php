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
            // ⚡ Bolt: Optimize Eloquent queries by executing directly at the database level instead of loading all models into PHP memory
            $newestProject = Auth::user()->projects()->latest('id')->first();
            $oldestProject = Auth::user()->projects()->oldest('id')->first();
            return view("admin.dashboard", compact("totalProjects", "newestProject", "oldestProject"));
        }
        return view("admin.dashboard", compact("totalProjects"));
    }
}
