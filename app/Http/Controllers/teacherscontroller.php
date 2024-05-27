<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\teachers;
use Illuminate\View\View;

class teacherscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = teachers::all();
        return view('teachers.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        teachers::create($input);
        return redirect('teachers')->with('flash_message', 'Teachers Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $teachers = teachers::find($id);
        return view('teachers.show')->with('teachers', $teachers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $teachers = teachers::find($id);
        return view('teachers.edit')->with('teachers', $teachers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $teachers = teachers::find($id);
        $input = $request->all();
        $teachers->update($input);
        return redirect('teachers')->with('flash message', 'Teachers Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        teachers::destroy($id);
        return redirect('teachers')->with('flash message', 'Teachers Deleted!');
    }
}
