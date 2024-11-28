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
        return Notebook::all();
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
        if ($request->has('company')) {
            $notebook->email = $request->input('company');
        } else {
            $notebook->company = NULL;
        }
        if ($request->has('image')) {
            $notebook->email = $request->input('image');
        } else {
            $notebook->image = NULL;
        }
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
        if ($request->has('name')) {
            $notebook->name = $request->input('name');
        }
        if ($request->has('number')) {
            $notebook->number = $request->input('number');
        }
        if ($request->has('email')) {
            $notebook->email = $request->input('email');
        }
        if ($request->has('company')) {
            $notebook->email = $request->input('company');
        }
        if ($request->has('image')) {
            $notebook->email = $request->input('image');
        }
        $notebook->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $notebook = Notebook::find($id);
        $notebook->delete();
    }
}
