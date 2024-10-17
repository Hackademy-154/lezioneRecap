<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $studentList = [
            [
                'id' => 1,
                'name' => 'Federica',
                'surname' => 'Mudu',
                'faveSubject' => 'Backend',
                'img' => 'https://picsum.photos/200'
            ],
            [
                'id' => 2,
                'name' => 'Alessio',
                'surname' => 'Acunzo',
                'faveSubject' => 'Backend',
                'img' => 'https://picsum.photos/201'
            ],
            [
                'id' => 3,
                'name' => 'Matteo',
                'surname' => 'Lucarelli',
                'faveSubject' => 'Frontend',
                'img' => 'https://picsum.photos/199'
            ],
            [
                'id' => 4,
                'name' => 'Giada',
                'surname' => 'Faraci',
                'faveSubject' => 'Frontend',
                'img' => 'https://picsum.photos/202'
            ],
        ];

        //quando troviamo il punto nel nome della vista all'interno del metodo view il "." deve essere interpretato come "/" quindi percorso
        return view('student.index' , ['students' => $studentList]);
    }

    public function show($id){
        $students = [
            [
                'id' => 1,
                'name' => 'Federica',
                'surname' => 'Mudu',
                'faveSubject' => 'Backend',
                'img' => 'https://picsum.photos/200'
            ],
            [
                'id' => 2,
                'name' => 'Alessio',
                'surname' => 'Acunzo',
                'faveSubject' => 'Backend',
                'img' => 'https://picsum.photos/201'
            ],
            [
                'id' => 3,
                'name' => 'Matteo',
                'surname' => 'Lucarelli',
                'faveSubject' => 'Frontend',
                'img' => 'https://picsum.photos/199'
            ],
            [
                'id' => 4,
                'name' => 'Giada',
                'surname' => 'Faraci',
                'faveSubject' => 'Frontend',
                'img' => 'https://picsum.photos/202'
            ],
        ];

        //Deve cercare all'interno di tutti gli studenti lo studente specifico che vogliamo riconosciuto tramite un attributo specifico (id)
        foreach ($students as $student) {
            if($id == $student['id']){
                return view('student.show', ['student' => $student]);
            }
        }
    }
}
