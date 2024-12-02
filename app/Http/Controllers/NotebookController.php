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
        $notebook = $request->validate([
            'name' => 'string|required',
            'number' => 'string|required',
            'email' => 'string|required',
            'company' => 'string',
            'image' => 'string',

        ]);
        
        Notebook::create($notebook);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if(!Notebook::find($id)) {
            return "Ошибка";
        }
        return Notebook::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        if(!Notebook::find($id)) {
            return "Ошибка";
        }
        $data = $request->all();

        $notebook = Notebook::find($id);

        if (!$notebook) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $notebook->update($data);

        return response()->json($notebook);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
        if(!Notebook::find($id)) {
            return "Ошибка";
        }
        $notebook = Notebook::find($id);
        $notebook->delete();
    }
}
