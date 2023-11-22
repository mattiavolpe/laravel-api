<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = config("db.projects");
        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->id = $project["id"];
            $newProject->user_id = $project["user_id"];
            $newProject->type_id = $project["type_id"];
            $newProject->name = $project["name"];
            $newProject->image = $project["image"];
            $newProject->slug = Project::generateSlug($newProject->name);
            $newProject->repositoryUrl = $project["repositoryUrl"];
            $newProject->starting_date = $project["starting_date"];
            $newProject->save();
        }
    }
}
