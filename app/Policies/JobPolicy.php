<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    public function edit(User $user, Job $job): bool
    {
        return $job->employer->user->is($user);
        
    }
    
    // public function update(User $user, Job $job)
    // {
    //     return $job->employer->user->is($user);
        
    // }

    // public function delete(User $user, Job $job)
    // {
    //     return $job->employer->user->is($user);
        
    // }


}

