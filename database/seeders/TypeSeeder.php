<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['backend', 'AI', 'UI', 'UX', 'cloud engineering', 'full-stack'];

        foreach($types as $item){
            $type = new Type();
            $type->name = $item;
            $type->slug = Str::slug($item);
            $type->save();
        }
    }
}
