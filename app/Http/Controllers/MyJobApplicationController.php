<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MyJobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       // dd(auth()->user()->jobApplications);
       return view(
        'my_job_application.index',
        [
            'applications' => auth()->user()->jobApplications()
                ->with('job', 'job.employer')
                ->with([
                    'job' => fn($query) => $query->withCount('jobApplications')
                        ->withAvg('jobApplications', 'expected_salary'),
                    'job.employer'
                ])
                ->latest()->get()
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     */
   
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return 'my applications';
    }

    /**
     * Show the form for editing the specified resource.
     */
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobApplication $myJobApplication)
    {
        //
        $myJobApplication->delete();

        return redirect()->back()->with(
            'success',
            'Job application removed.'
        );

    }
}
