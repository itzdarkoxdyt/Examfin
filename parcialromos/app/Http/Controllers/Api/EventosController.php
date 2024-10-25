<?php

namespace App\Http\Controllers\Api;

use App\Models\Eventos;
use Illuminate\Http\Request;
use App\Http\Requests\EventosRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\EventosResource;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $eventos = Eventos::paginate();

        return EventosResource::collection($eventos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventosRequest $request): Eventos
    {
        return Eventos::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Eventos $eventos): Eventos
    {
        return $eventos;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventosRequest $request, Eventos $eventos): Eventos
    {
        $eventos->update($request->validated());

        return $eventos;
    }

    public function destroy(Eventos $eventos): Response
    {
        $eventos->delete();

        return response()->noContent();
    }
}
