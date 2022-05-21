<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function specializations()
    {
        return $this->belongsTo('App\Models\Specialization', 'Specialization_id');
    }

    public function genders()
    {
        return $this->belongsTo('App\Models\Gender', 'Gender_id');
    }

    public function Sections()
    {
        return $this->belongsToMany(Section::class,'teacher_section');
    }
}
