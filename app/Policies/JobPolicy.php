<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Termwind\Components\Dd;

class JobPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(?User $user, Job $job): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Job $job): bool
    {
        //
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Job $job): bool
    {
        //
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Job $job): bool
    {
        //
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Job $job): bool
    {
        //
        return false;


    }

    public function apply(User $user,Job $job):bool
    {

    //  dd($job,$user->whereHas('jobApplications',function($query)use ($job){
    //   $query->where('job_id','=',$job->id);  
    //  })
    //  ->get());
    //dd($user->jobApplications()->where('job_id','=',$job->id)->first());
    if($user->jobApplications()->where('job_id','=',$job->id)->exists())
      return false;
     return true; 
    }
}