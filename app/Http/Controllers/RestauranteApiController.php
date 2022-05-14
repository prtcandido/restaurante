<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurante;

use App\Http\Resources\Restaurante as RestauranteResource; // necessário diferenciar do model Restaurante

class RestauranteApiController extends Controller
{
    public function apiAll()
    {
    	$todosRest = Restaurante::all();
    	return RestauranteResource::collection($todosRest);
    }

    public function apiFind(Restaurante $restaurante)
    {
    	return new RestauranteResource($restaurante);
    }

    public function apiStore(Request $request)
    {
    	try {
    		$r = Restaurante::create( $request->all() );
    		return response()->json($r,201);
    	} catch (\Exception $ex) {
    		return response()->json(null,400);
    	}
    }
}
