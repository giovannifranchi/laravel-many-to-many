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
        $tech_list = ['js', 'html', 'css', 'python', 'java', 'react', 'laravel', 'vue 3'];

        foreach($tech_list as $technology){
            $newTech = new Technology();
            $newTech->name = $technology;
            $newTech->slug = Str::slug($technology);
            $newTech->save();
        }
    }
}
