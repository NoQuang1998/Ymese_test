<?php

namespace App\Http\Controllers;

use App\Ymesetbl;
use Illuminate\Http\Request;

class pdfController extends Controller
{
   public function index(){
       $ymese  = Ymesetbl::latest()->paginate(3);
       return view('index', compact('ymese'));
   }

   public function downloadFDF($id){
        $data['ymese'] = Ymesetbl::latest()->paginate(3);
        $yme = Ymesetbl::find($id);  
        $namePDF = $yme->download_link . '.pdf'; 
        if($data['ymese'] != null){
            $pdf = \PDF::loadView('index', $data);
            return $pdf->download($namePDF);
        }
        return false;
   }

}
