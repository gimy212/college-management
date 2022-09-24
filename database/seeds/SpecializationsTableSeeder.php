<?php

use App\Models\Specialization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['en'=> 'cs', 'ar'=> 'cs'],
            ['en'=> 'is', 'ar'=> 'is'],
            ['en'=> 'me', 'ar'=> 'me'],
            ['en'=> 'it', 'ar'=> 'it'],
            ['en'=> 'mm', 'ar'=> 'mm'],
        ];
        foreach ($specializations as $S) {
            Specialization::create(['Name' => $S]);
        }
    }
}
