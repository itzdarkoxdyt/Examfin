<?php

namespace App\Http\Controllers;

use App\Models\Organizadores;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\OrganizadoresRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OrganizadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $organizadores = Organizadores::paginate();

        return view('organizadores.index', compact('organizadores'))
            ->with('i', ($request->input('page', 1) - 1) * $organizadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $organizadores = new Organizadores();

        return view('organizadores.create', compact('organizadores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrganizadoresRequest $request): RedirectResponse
    {
        Organizadores::create($request->validated());

        return Redirect::route('organizadores.index')
            ->with('success', 'Organizadores created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $organizadores = Organizadores::find($id);

        return view('organizadores.show', compact('organizadores'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $organizadores = Organizadores::find($id);

        return view('organizadores.edit', compact('organizadores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrganizadoresRequest $request, Organizadores $organizadores): RedirectResponse
    {
        $organizadores->update($request->validated());

        return Redirect::route('organizadores.index')
            ->with('success', 'Organizadores updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Organizadores::find($id)->delete();

        return Redirect::route('organizadores.index')
            ->with('success', 'Organizadores deleted successfully');
    }
}
