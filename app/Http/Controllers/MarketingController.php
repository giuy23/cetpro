<?php

namespace App\Http\Controllers;

use App\Models\Marketing;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marketings = Marketing::all();
        return view('admin.marketing.index', compact('marketings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.marketing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'medio' => 'required',
            'descripcion',
        ]);

        $marketing = Marketing::create($request->all());
        return redirect()->route('admin.marketings.edit', $marketing)->with('info', 'El formulario se registró con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Marketing $marketing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marketing $marketing)
    {
        return view("admin.marketing.edit", compact("marketing"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marketing $marketing)
    {
        $request->validate([
            'medio' => 'required',
            'descripcion',
        ]);

        $marketing->update($request->all());
        return redirect()->route('admin.marketings.edit', $marketing)->with('info', 'El formulario se registró con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marketing $marketing)
    {
        $marketing->delete();

        return redirect()->route('admin.marketings.index', $marketing)->with('info', 'El registro se eliminó con éxito');
    }
}
