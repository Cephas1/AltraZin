<?php

namespace App\Http\Controllers;

use App\Models\Magazins;
use App\Http\Requests\StoreMagazinsRequest;
use App\Http\Requests\UpdateMagazinsRequest;

class MagazinsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $magazins = Magazins::all();

        return view('_magazins', ['magazins' => $magazins]);
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
    public function store(StoreMagazinsRequest $request)
    {
        $data=[
            'name' => $request->name,
            'description' => $request->description
        ];

        $magazin = Magazin::create($data);

        if($data){
            return $magazin;
        }else{
            return $magazin;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Magazins $magazins)
    {
        return view('_magazins_show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Magazins $magazins)
    {
        $magazin = Magazin::find($magazins->id);
        if($magazin->update($magazins)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMagazinsRequest $request, Magazins $magazins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Magazins $magazins)
    {
        $destroy = Magazin::delete($magazins->id);

        if($destroy){return true;}else{return false;}
    }
}
