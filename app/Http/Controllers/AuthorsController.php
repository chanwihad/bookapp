<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\ModelNotFoundException;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Authors;

class AuthorsController extends BaseController
{
    //
    public function index()
    {
        return Authors::all();
    }
    // Menampilkan detail buku berdasarkan ID
    public function show($id)
    {
        if ($Authors = Authors::find($id)) {
            return response()->json([
                'message' => 'show Authors by id',
                'data' => $Authors
            ], 200);
        } else {
            return response()->json([
                'message' => 'Authors not found'
            ], 404);
        }
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'biography' => 'required'
        ]);
        $Authors = Authors::create(
            $request->only(['name', 'gender', 'biography'])
        );
        return response()->json([
            'created' => true,
            'data' => $Authors
        ], 201);
    }
    public function update(Request $request, $id)
  {
    try {
      $Authors = Authors::findOrFail($id);
    } catch (ModelNotFoundException $e) {
      return response()->json([
        'message' => 'Authors not found'
      ], 404);
    }
    $Authors->fill(
        $request->only(['name', 'gender', 'biography'])
      );
      $Authors->save();
  
      return response()->json([
        'updated' => true,
        'data' => $Authors
      ], 200); 
}

    // Menghapus Buku
    public function destroy($id)
  {
    try {
      $Authors = Authors::findOrFail($id);
    } catch (ModelNotFoundException $e) {
      return response()->json([
        'error' => [
          'message' => 'Authors not found'
        ]
      ], 404);
    }

    $Authors->delete();

    return response()->json([
      'deleted' => true
    ], 200);
  }
}
