<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function download (){

        $file = 'assets/cv/cv.pdf';

        if (is_file($file)) {
          $filename = "CV.pdf"; 
          // el nombre con el que se descargará, puede ser diferente al original
          header("Cache-Control: public");
          header("Content-Description: File Transfer");
          header("Content-Transfer-Encoding: binary"); 
          header ("Content-type: application/force-download");
          header ("Content-type: application/pdf"); 
          header("Content-Disposition: attachment; filename= $filename");
          readfile($file);
        } else {
          die("Error: no se encontró el archivo '$file'");
        }

    return view('home');
    }
}
