<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApiController extends Controller
{

    public function test(){
        $data = [
          [
            'nama' => 'Ravialdo',
            'jk'   => 'L'
          ],
          [
            'nama' => 'Genji',
            'jk'   => 'L'
          ]
        ];

        return $data;
    }

}
