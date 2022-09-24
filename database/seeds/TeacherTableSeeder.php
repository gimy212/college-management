<?php

use Illuminate\Database\Seeder;
use App\Models\Classroom;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\My_Parent;
use App\Models\Nationalitie;
use App\Models\Section;
use App\Models\Specialization;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Type_Blood;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        DB::table('teachers')->delete();
        $teachers = new Teacher();
        $teachers->email = 'mg7934548@gmail.com';
        $teachers->password = Hash::make('12345678');
        $teachers->Name = ['ar' => 'مصطفى', 'en' => 'mostafa'];
        $teachers->Specialization_id = Specialization::all()->unique()->random()->id;
        $teachers->gender_id = 1;
        $teachers->Joining_Date = date('1995-01-01');
        $teachers->Address ='bns';
        $teachers->save();
    }
}
