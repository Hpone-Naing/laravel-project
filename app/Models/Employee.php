<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function programmingLanguages()
    {
        return $this->belongsToMany(ProgrammingLanguage::class);
    }
}
