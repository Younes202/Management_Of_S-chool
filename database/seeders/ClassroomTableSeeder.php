<?php

namespace Database\Seeders;
use App\Models\Classroom;
use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClassroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->delete();
        $classrooms = [
          'Niveau:1','Niveau:2','Niveau:3',
        ];

        foreach ($classrooms as $classroom) {
            Classroom::create([
            'Name_Class' => $classroom,
            'Grade_id' => Grade::all()->unique()->random()->id
            ]);
        }
    }
}