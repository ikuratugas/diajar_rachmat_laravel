<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    private $student = [
        [
            "nama" => "ikrar",
            "nim" => "20650028",
        ],
        [
            "nama" => "rahmat",
            "nim" => "20650049",
        ],
        [
            "nama" => "agus",
            "nim" => "20650128",
        ],
    ];

    public function getStudents(){
        return collect($this->student);
    }

    public static function getDetailStudent($nim){
        $students = static::getStudents();
        return $students->firstWhere('nim',$nim);
    }
}