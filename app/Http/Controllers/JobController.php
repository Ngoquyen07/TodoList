<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jobs = Job::all()->where('is_deleted',false)
            ->sortBy([
                ['status', 'asc'],
                ['updated_at', 'desc'],
            ]);
        return view('job.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $newJob = $request->validate([
                'name' => 'required',
                'status' => 'required|integer',
                'description' => 'nullable|string',
            ]);

            Job::create($newJob);
            return redirect()->route('jobs.create')
                ->with('success', 'Job created successfully!');

        } catch (\Exception $exception) {
            return back()->with('error', 'Something went wrong!' . $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('job.edit', compact('job'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        //
        try {
            $updatedData = $request->validate([
                'status' => 'required|integer',
                'description' => 'nullable|string',
            ]);

            // Cập nhật
            $job->update($updatedData);

            // Điều hướng trở lại form edit
            return redirect()->route('jobs.edit', $job)
                ->with('success', 'Job updated successfully!');

        } catch (\Exception $exception) {
            return redirect()->route('jobs.edit',$job)
                ->with('error', 'Something went wrong!' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
        try {
            $job->is_deleted = true;
            $job->save();

            return redirect()->route('jobs.index')
                ->with('success', 'Job deleted successfully !');
        }
        catch (\Exception $e) {
            return back()->with('error', 'Something went wrong!' . $e->getMessage());
        }
    }
}
