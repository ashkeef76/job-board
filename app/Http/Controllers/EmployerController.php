<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
public function __construct()
{
    $this->authorizeResource(Employer::class);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('employer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        auth()->user()->employer()->create(
            $request->validate([
                'company_name'=>'required|min:3|unique:employers,company_name'
            ])
        );
        return redirect(route('jobs.index'))->with('success','company created');
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
