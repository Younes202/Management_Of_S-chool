<?php


namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Gender;

use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->delete();

        $genders =  ['Male', 'Female'];

        foreach ($genders as $ge) {
            Gender::create(['Name' => $ge]);
        }
    }
}
