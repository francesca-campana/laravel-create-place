<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
      $students = [
        [
          'nome' => 'Francesca',
          'cognome' => 'Campana',
          'voto' => 8,
        ],
        [
          'nome' => 'Patty',
          'cognome' => 'Smith',
          'voto' => 10,
        ],
        [
          'nome' => 'Cat',
          'cognome' => 'Power',
          'voto' => 11,
        ],
      ];
      // dd(compact('students'));
        return view('students', compact('students'));
    }
}
