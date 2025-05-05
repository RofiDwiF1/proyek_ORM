<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Skill;

class Employee extends Model
{
    protected $fillable = ['name', 'company_id'];

    // Relasi Many to One
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // Relasi Many to Many
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
