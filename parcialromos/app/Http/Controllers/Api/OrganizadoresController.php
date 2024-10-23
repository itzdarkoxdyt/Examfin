<?php

namespace App\Http\Controllers\Api;

use App\Models\Organizadores;
use Illuminate\Http\Request;
use App\Http\Requests\OrganizadoresRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrganizadoresResource;

class OrganizadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $organizadores = Organizadores::paginate();

        return OrganizadoresResource::collection($organizadores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrganizadoresRequest $request): Organizadores
    {
        return Organizadores::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Organizadores $organizadores): Organizadores
    {
        return $organizadores;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrganizadoresRequest $request, Organizadores $organizadores): Organizadores
    {
        $organizadores->update($request->validated());

        return $organizadores;
    }

    public function destroy(Organizadores $organizadores): Response
    {
        $organizadores->delete();

        return response()->noContent();
    }
}
