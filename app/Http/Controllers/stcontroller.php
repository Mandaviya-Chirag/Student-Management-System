<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\st;
use Illuminate\View\View;

class stcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $st = st::all();
        return view('students.index')->with('st',$st);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        st::create($input);
        return redirect('students')->with('flash_message', 'Student Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $st = st::find($id);
        return view('students.show')->with('st',$st);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $st = st::find($id);
        return view('students.edit')->with('st', $st);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $st = st::find($id);
        $input = $request->all();
        $st->update($input);
        return redirect('students')->with('flash message', 'Student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        st::destroy($id);
        return redirect('students')->with('flash message', 'Student Deleted!');
    }
}
