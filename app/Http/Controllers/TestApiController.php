<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use App\Teacher;

class TestApiController extends Controller
{

    public function test(){

        $data = [
          'students' => Student::paginate(1),
        #  'teachers' => Teacher::all()
        ];

        return $data;
    }

}
