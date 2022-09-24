<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Subject;
use App\Models\Grade;
use App\Models\Classroom;
use App\Models\Teacher;
class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->delete();
        $subjects = [
            ['en'=> 'ai', 'ar'=> 'ai'], 
            ['en'=> 'cs', 'ar'=> 'cs'], 
            ['en'=> 'english', 'ar'=> 'english'],
            ['en'=> 'genom', 'ar'=> 'genom'],
            ['en'=> 'math1', 'ar'=> 'math1'],
            ['en'=> 'math2', 'ar'=> 'math2'],
            ['en'=> 'physics', 'ar'=> 'physics'],
        ];
        foreach ($subjects as $subjects) {
            Subject::create([
                'name' => $subjects,
                'teacher_id' =>Teacher::all()->unique()->random()->id,
                'Grade_id' => Grade::all()->unique()->random()->id,
                'Class_id' => ClassRoom::all()->unique()->random()->id
            ]);
        } 
    }
}
