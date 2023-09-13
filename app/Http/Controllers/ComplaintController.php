<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function complaintt(){
        $complaints = Complaint::all();
        return view('complaints',compact('complaints'));
    }

}
