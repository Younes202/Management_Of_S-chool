<?php
namespace Database\Seeders;
use App\Models\Religion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class religionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religions')->delete();

        $religions = [


                    'Muslim',


                 'Christian',



                'Others'



        ];

        foreach ($religions as $R) {
            Religion::create(['Name' => $R]);
        }
    }
}
