<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = config("db.technologies");
        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->name = $technology["name"];
            $newTechnology->slug = Str::slug($newTechnology->name, "-");
            $newTechnology->logo = $technology["logo"];
            $newTechnology->user_id = 1;
            $newTechnology->save();
        }
    }
}
