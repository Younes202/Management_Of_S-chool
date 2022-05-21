<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Section extends Model
{
    use HasFactory;

    protected $fillable=['Name_Section','Grade_id','Class_id'];

    protected $table = 'sections';
    public $timestamps = true;


    // علاقة بين الاقسام والصفوف لجلب اسم الصف في جدول الاقسام

    public function Classrooms()
    {
        return $this->belongsTo('App\Models\Classroom', 'Class_id');
    }
    // rela  Les classes Avec les prof

    public  function teachers()
    {
        return $this->belongsToMany(Teacher::class ,'teacher_section');
    }

}
