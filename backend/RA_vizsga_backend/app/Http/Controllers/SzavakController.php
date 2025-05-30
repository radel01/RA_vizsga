<?php

namespace App\Http\Controllers;

use App\Models\szavak;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       /*  $szavak=szavak::with('temakAdat:id,temanev')->get()->map(function($szavak){
            return[
                'id'=>$szavak->id,
                'angol'=>$szavak->angol,
                'magyar'=>$szavak->magyar,
                'temanev'=>$szavak->temakAdat->temanev ?? null,
            ];
        });
        return response()->json($szavak); */
        return szavak::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(szavak $szavak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, szavak $szavak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(szavak $szavak)
    {
        //
    }
}
