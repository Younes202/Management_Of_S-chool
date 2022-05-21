<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Nationalitie;

use Illuminate\Database\Seeder;


class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->delete();

        $nationals = [

                 'Afghan',

               'Albanian',
                 'Algerian',
                 'Azerbaijani',
                 'Bahraini',
                'Bangladeshi',
                'Egyptian',
              'Jordanian',
               'Kazakh',
              'Omani',
               'Pakistani',
                'Palestinian',
              'Syrian',
                 'Tajikistani',
                'Tunisian',
                    'Turkish',
                'Turkmen',
                 'Emirati',
                 'Uzbek',
                    'Yemeni'
        ];

        foreach ($nationals as $national) {
            Nationalitie::create(['Name' => $national]);
        }

    }
}
