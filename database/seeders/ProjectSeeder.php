<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $project = new Project();
            $project->name = $faker->sentence();
            $project->repositoryUrl = Project::createRepositoryUrl($project->name);
            $project->starting_date = date("Y-m-d");
            $project->save();
        }
    }
}
