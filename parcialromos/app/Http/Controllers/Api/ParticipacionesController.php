<?php

namespace App\Http\Controllers\Api;

use App\Models\Participaciones;
use Illuminate\Http\Request;
use App\Http\Requests\ParticipacionesRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\ParticipacionesResource;

class ParticipacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $participaciones = Participaciones::paginate();

        return ParticipacionesResource::collection($participaciones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParticipacionesRequest $request): Participaciones
    {
        return Participaciones::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Participaciones $participaciones): Participaciones
    {
        return $participaciones;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParticipacionesRequest $request, Participaciones $participaciones): Participaciones
    {
        $participaciones->update($request->validated());

        return $participaciones;
    }

    public function destroy(Participaciones $participaciones): Response
    {
        $participaciones->delete();

        return response()->noContent();
    }
}
