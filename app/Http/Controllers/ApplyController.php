<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApplyController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('./');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'website' => 'sometimes',
            'coverletter' => 'required',
            'documents' => 'sometimes|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $documentPath = '';
        if ($request->hasFile('documents')) {
            $documentPath = $request->file('documents')->store('public/documents');
        }
        
        $apply = Apply::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'coverletter' => $request->coverletter,
            'documents' => $documentPath
        ]);

        if ($apply) {
            return redirect('dashboard')->with('success', 'Applied Successfully!');
        }else {
            return redirect()->back()->withErrors('something went wrong')->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}
