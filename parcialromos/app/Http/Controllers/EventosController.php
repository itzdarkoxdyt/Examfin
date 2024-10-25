<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EventosRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $eventos = Eventos::paginate();

        return view('eventos.index', compact('eventos'))
            ->with('i', ($request->input('page', 1) - 1) * $eventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $eventos = new Eventos();

        return view('eventos.create', compact('eventos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventosRequest $request): RedirectResponse
    {
        Eventos::create($request->validated());

        return Redirect::route('eventos.index')
            ->with('success', 'Eventos created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $eventos = Eventos::find($id);

        return view('eventos.show', compact('eventos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $eventos = Eventos::find($id);

        return view('eventos.edit', compact('eventos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventosRequest $request, Eventos $eventos): RedirectResponse
    {
        $eventos->update($request->validated());

        return Redirect::route('eventos.index')
            ->with('success', 'Eventos updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Eventos::find($id)->delete();

        return Redirect::route('eventos.index')
            ->with('success', 'Eventos deleted successfully');
    }
}
