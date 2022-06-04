<?php

namespace App\Http\Controllers;

use App\Models\Prato;
use Illuminate\Http\Request;

class PratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('prato.index')->with('pratos',Prato::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rest = Restaurante::all();
        return View ('prato.create')->with('rest',$rest);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Prato::create( $request->all() );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prato  $prato
     * @return \Illuminate\Http\Response
     */
    public function show(Prato $prato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prato  $prato
     * @return \Illuminate\Http\Response
     */
    public function edit(Prato $prato)
    {
        $rest = Restaurante::all();
        return View ('prato.edit')->with('rest',$rest)->with('prato',$prato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prato  $prato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prato $prato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prato  $prato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prato $prato)
    {
        //
    }
}
