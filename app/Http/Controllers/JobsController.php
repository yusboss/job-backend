<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\Category;
use Illuminate\Http\Request;

class JobsController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Jobs::all();
        return view('job-list')->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('job-post')->with('category', $category);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'vacancy' => 'required',
            'nature' => 'required',
            'salary' => 'required',
            'location' => 'required',
            'job_desc' => 'required',
            'company' => 'required',
            'category' => 'required',
            'responsibility' => 'required',
            'qualifications' => 'required',
        ]);

        if ($validated) {
            $job = Jobs::create(['vacancy' => $request->vacancy,
                            'nature' => $request->nature,
                            'salary' => $request->salary,
                            'location' => $request->location,
                            'job_desc' => $request->job_desc,
                            'company' => $request->company,
                            'responsibility' => $request->responsibility,
                            'qualifications' => $request->qualifications]);
            return redirect('dashboard')->with('success', 'Job Posted Successfully');
        } else {
            return back()->withError('error', 'Some thing went wrong, please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = Jobs::whereId($id)->first();
        return view('job-detail')->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
    {
        $search = Jobs::whereCategory($request->category, 'like', "%{$request->word}%")->get();
        return view('job-list')->with('search', $search);
    }
}
