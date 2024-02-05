<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfGenerator extends Controller
{
    // public function generatePdf(){
    //     $pdf = App::make('dompdf.wrapper');
    //     $pdf->loadhtml('<h1>Test</h1>');
    //     return $pdf->stream();
    // }

    public function bladepdf(){
        $name = "vaibhav";
        $email = "Vaibhavbhalla@gmail.com";
        $pdf = PDF::loadView('pdf',['name'=>$name,'email'=>$email]);
        // return $pdf->download('email-template'.time().'.pdf');
        return $pdf->stream();
    }
}
