<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Type;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderByDesc("id")->get();
        return view("admin.projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::orderBy('name')->get();
        return view("admin.projects.create", compact("types"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $valData = $request->validated();
        $valData["slug"] = Project::generateSlug($valData["name"]);
        if(count(Project::where('slug', $valData["slug"])->get()->toArray()) > 0) {
            return to_route("admin.projects.create")->with("message", "Please use a name that is unique, without considering punctuation");
        }
        $valData["repositoryUrl"] = Project::generateRepositoryUrl($valData["slug"]);
        $valData["starting_date"] = date("Y-m-d") . " " . date("H:i:s");
        Project::create($valData);
        return to_route("admin.projects.index")->with("message", "Project successfully inserted");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $types = Type::orderBy('name')->get();
        return view("admin.projects.edit", compact("project", "types"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $valData = $request->validated();
        $valData["slug"] = Project::generateSlug($valData["name"]);
        if(count(Project::where('slug', $valData["slug"])->get()->toArray()) > 1) {
            return to_route("admin.projects.edit", $project)->with("message", "Please use a name that is unique, without considering punctuation");
        }
        $valData["repositoryUrl"] = Project::generateRepositoryUrl($valData["slug"]);
        $valData["starting_date"] = date("Y-m-d") . " " . date("H:i:s");
        $project->update($valData);
        return to_route("admin.projects.show", $project)->with("message", "Project successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return to_route("admin.projects.index")->with("message", "Project successfully deleted");
    }
}
