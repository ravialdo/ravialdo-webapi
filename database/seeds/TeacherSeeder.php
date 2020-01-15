<?php

use Illuminate\Database\Seeder;

use App\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'nama' => 'Mr. John',
            'jk' => 'L'
        ]);

        Teacher::create([
            'nama' => 'Mr. Doe',
            'jk' => 'L'
        ]);

        Teacher::create([
            'nama' => 'Mr. Sir',
            'jk' => 'L'
        ]);
    }
}
