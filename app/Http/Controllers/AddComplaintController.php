<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AddComplaintController extends Controller
{
    public function create() : View
    {
        return view('addcomplaints');
    }

    public function add(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'empname' => ['required', 'string', 'max:255'],
            'compname' => ['required', 'string', 'max:255'],
            'comp_text' => 'required',
            'department_id' => 'required',
        ]);

        $complaint = Complaint::create([
            'title' => $request->title,
            'empname' => $request->empname,
            'compname'=> $request->compname,
            'comp_text'=> $request->comp_text,
            'department_id' => $request->department_id ,
        ]);

        event(new Registered($complaint));

        return redirect(RouteServiceProvider::SENT);
    }
    
}
