<?php

namespace App\Http\Controllers\Admin;

use App\Models\Technology;
use App\Http\Requests\StoreTechnologyRequest;
use App\Http\Requests\UpdateTechnologyRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technologies = Auth::user()->technologies()->orderByDesc("id")->get();
        return view("admin.technologies.index", compact("technologies"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.technologies.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTechnologyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTechnologyRequest $request)
    {
        $valData = $request->validated();
        $valData["slug"] = Technology::generateSlug($valData["name"]);
        if(count(Technology::where('slug', $valData["slug"])->get()->toArray()) > 0) {
            return to_route("admin.technologies.create")->with("message", "Please use a name that is unique, without considering punctuation");
        }
        Technology::create($valData);
        return to_route("admin.technologies.index")->with("message", "Technology successfully inserted");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function show(Technology $technology)
    {
        return view("admin.technologies.show", compact("technology"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function edit(Technology $technology)
    {
        return view("admin.technologies.edit", compact("technology"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTechnologyRequest  $request
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTechnologyRequest $request, Technology $technology)
    {
        $valData = $request->validated();
        $valData["slug"] = Technology::generateSlug($valData["name"]);
        if(count(Technology::where('slug', $valData["slug"])->get()->toArray()) > 1) {
            return to_route("admin.technologies.edit", $technology)->with("message", "Please use a name that is unique, without considering punctuation");
        }
        $technology->update($valData);
        return to_route("admin.technologies.show", $technology)->with("message", "Technology successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technology $technology)
    {
        $technology->delete();
        return to_route("admin.technologies.index")->with("message", "Technology successfully deleted");
    }
}
