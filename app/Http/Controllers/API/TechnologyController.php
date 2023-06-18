<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index() {
        $technologies = Technology::all();
        return response()->json([
            "success" => true,
            "technologies" => $technologies
        ]);
    }
}
