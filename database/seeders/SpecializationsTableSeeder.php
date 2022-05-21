<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Specialization;

use Illuminate\Database\Seeder;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specializations')->delete();
        $specializations = [
            'Arabic',
            'Quran',
            'Aqida',
            'Motoune',
            'Aqida-tahaoui',
            'Aqida-wassit',
            'Fiqh',
            'Manhaj-Alsalaf',
        ];
        foreach ($specializations as $z)
        {
            Specialization::create(['Name'=> $z]);
        }
    }
}
