<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::orderByDesc("id")->get();
        return view("admin.types.index", compact("types"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.types.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeRequest $request)
    {
        $valData = $request->validated();
        $valData["slug"] = Type::generateSlug($valData["name"]);
        if(count(Type::where('slug', $valData["slug"])->get()->toArray()) > 0) {
            return to_route("admin.types.create")->with("message", "Please use a name that is unique, without considering punctuation");
        }
        Type::create($valData);
        return to_route("admin.types.index")->with("message", "Type successfully inserted");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        return view("admin.types.show", compact("type"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        return view("admin.types.edit", compact("type"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeRequest  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeRequest $request, Type $type)
    {
        $valData = $request->validated();
        $valData["slug"] = Type::generateSlug($valData["name"]);
        if(count(Type::where('slug', $valData["slug"])->get()->toArray()) > 1) {
            return to_route("admin.types.edit", $type)->with("message", "Please use a name that is unique, without considering punctuation");
        }
        $type->update($valData);
        return to_route("admin.types.show", $type)->with("message", "Type successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return to_route("admin.types.index")->with("message", "Type successfully deleted");
    }
}
