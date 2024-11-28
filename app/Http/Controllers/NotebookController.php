<?php

namespace App\Http\Controllers;

use App\Models\Notebook;
use Illuminate\Http\Request;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return csrf_token();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $notebook = new Notebook();
        if ($request->has('name')) {
            $notebook->name = $request->input('name');
        }
        if ($request->has('number')) {
            $notebook->number = $request->input('number');
        }
        if ($request->has('email')) {
            $notebook->email = $request->input('email');
        }
        $notebook->company = $request->input('company');
        $notebook->email = $request->input('email');
        $notebook->image = $request->input('image');
        $notebook->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Notebook::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notebook $notebook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notebook $notebook)
    {
        //
    }
}
