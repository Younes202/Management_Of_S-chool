<?php
namespace Database\Seeders;

use App\Models\My_Parent;
use App\Models\Nationalitie;
use App\Models\Religion;
use App\Models\Type_Blood;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ParentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my__parents')->delete();
            $my_parents = new My_Parent();
            $my_parents->email = 'sgheyryounes@gamil.com';
            $my_parents->password = Hash::make('12345678');
            $my_parents->Name_Father = "Hassan";
            $my_parents->National_ID_Father = '1234567810';
            $my_parents->Passport_ID_Father = '1234567810';
            $my_parents->Phone_Father = '1234567810';
            $my_parents->Job_Father = 'Comptable';
            $my_parents->Nationality_Father_id = Nationalitie::all()->unique()->random()->id;
            $my_parents->Blood_Type_Father_id =Type_Blood::all()->unique()->random()->id;
            $my_parents->Religion_Father_id = Religion::all()->unique()->random()->id;
            $my_parents->Address_Father ='Oujda';
            $my_parents->Name_Mother = "Blablaa";
            $my_parents->National_ID_Mother = '1234567810';
            $my_parents->Passport_ID_Mother = '1234567810';
            $my_parents->Phone_Mother = '1234567810';
            $my_parents->Job_Mother = "Prof";
            $my_parents->Nationality_Mother_id = Nationalitie::all()->unique()->random()->id;
            $my_parents->Blood_Type_Mother_id =Type_Blood::all()->unique()->random()->id;
            $my_parents->Religion_Mother_id = Religion::all()->unique()->random()->id;
            $my_parents->Address_Mother ='Rabat';
            $my_parents->save();

    }
}