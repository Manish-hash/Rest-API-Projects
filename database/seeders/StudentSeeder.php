<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i=1;$i<=50;$i++){
        student::create([
            'name'=> fake()->name(),
            'email'=>fake()->unique()->email()
        ]);
    }
        //using json
        // $json = FILE::get(path:'database/json/student.json');
        // $students = collect(json_decode($json));

        // foreach($students as $std){
        //         student::create([
        //             'name'=> $std->name,
        //             'email'=> $std->email
        //         ]);
        // };




        //collect function method
        // $students =collect([
        //     [
        //         'name'=> 'Manish1', 
        //         'email'=> 'manish1@gmail.com' 
        //     ],
        //     [
        //         'name'=> 'Manish2', 
        //         'email'=> 'manish2@gmail.com' 
        //     ],
        //     [
        //         'name'=> 'Manish3', 
        //         'email'=> 'manish3@gmail.com' 
        //     ],

        
        // ]);

        // $students->each(function($student){
        //     student::insert($student);
        // });





        //normal method
        // student::create([
        //   'name'=> 'Manish', 
        //   'email'=> 'manish@gmail.com' 
        // ]);



    }
}
