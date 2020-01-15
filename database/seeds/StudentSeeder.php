<?php

use Illuminate\Database\Seeder;

use App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        student::create([
          'nama' => 'abdul',
          'jk' => 'L'
        ]);

        student::create([
          'nama' => 'asep',
          'jk' => 'L'
        ]);

        student::create([
          'nama' => 'kodir',
          'jk' => 'L'
        ]);
    }
}
