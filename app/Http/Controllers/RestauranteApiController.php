<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurante;

use App\Http\Resources\Restaurante as RestauranteResource; // necessário diferenciar do model Restaurante

class RestauranteApiController extends Controller
{
    // Get + url: /api/restaurante
    public function apiAll()
    {
    	$todosRest = Restaurante::all();
    	return RestauranteResource::collection($todosRest);
    }

    // Get + url: /api/restaurante/2
    public function apiFind(Restaurante $restaurante)
    {
    	return new RestauranteResource($restaurante);
    }

    // Post + url: /api/restaurante + Json com dados
    public function apiStore(Request $request)
    {
    	try {
    		$r = Restaurante::create( $request->all() );
    		return response()->json($r,201);
    	} catch (\Exception $ex) {
    		return response()->json(null,400);
    	}
    }

    // Put + url: /api/restaurante/2 + Json com novos dados
    public function apiUpdate(Request $request, 
                              Restaurante $restaurante)
    {
        try {
            $r = $restaurante->update( $request->all()  );
            return response()->json($r,200);
        } catch (\Exception $ex) {
            return response()->json(null,400);
        }
    }

    // Delete + url: /api/restaurante/2
    public function apiDelete(Restaurante $restaurante)
    {
        try {
            $restaurante->delete();
            return response()->json(null,204);
        } catch (\Exception $ex) {
            return response()->json(null,400);
        }
    }

}
