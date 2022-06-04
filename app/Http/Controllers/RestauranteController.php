<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RestauranteController extends Controller
{
    //public function __construct(Request $request)
    //{
    //    $this->middleware('auth', [ 'except' => ['index'] ] );
    //}

    public function index()
    {
        return 'entrou index';
    }
    public function create()
    {
        return 'entrou create'.Auth::user()->name;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($resquest,['cnpj'=>'required|max:10'],['cnpj.*'=>'Mensagem de erro']);

        Restaurante::create( $request->all() );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurante $restaurante)
    {
        $pratos = $restaurante->pratos()->get();
        $tipos = $restaurante->tipos()->get();
        return View('restaurante.show')->with('restaurante',$restaurante)->with('pratos',$pratos)->with('tipos',$tipos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurante $restaurante)
    {
        return View('restaurante.edit')->with('restaurante',$restaurante);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurante $restaurante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurante $restaurante)
    {
        //
    }
}
