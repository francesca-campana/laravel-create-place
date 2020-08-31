<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index(){
      // $students = [
      //   [
      //     'nome' => 'Francesca',
      //     'cognome' => 'Campana',
      //     'voto' => 8,
      //   ],
      //   [
      //     'nome' => 'Patty',
      //     'cognome' => 'Smith',
      //     'voto' => 10,
      //   ],
      //   [
      //     'nome' => 'Cat',
      //     'cognome' => 'Power',
      //     'voto' => 11,
      //   ],
      // ];
      // dd(compact('students'));
        $students = Student::all();
        return view('students', compact('students'));
    }
}
