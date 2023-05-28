<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Type extends Model
{
    use HasFactory;

    public function projects(){
        return $this->hasMany(Project::class);
    }

    protected function name():Attribute
    {
        return Attribute::make(
            get: fn(string $value) => Str::upper($value)
        );
    }
}
