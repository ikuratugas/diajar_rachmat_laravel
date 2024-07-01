<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function index () {
        return view('ikura.index');
    }
    public function utamanih() {
        $p = new student();
        $s = $p->getStudents();
        return view('ikura.utamani', ['students'=>$s]);
    }

    public function detail($nim) {
        $p = new student();
        $s = $p->getStudents();
        return view('ikura.detail', ['students'=>$s]);
    }
}
