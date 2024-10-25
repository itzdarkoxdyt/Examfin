<?php

namespace App\Http\Controllers;

use App\Models\Participaciones;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ParticipacionesRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ParticipacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $participaciones = Participaciones::paginate();

        return view('participaciones.index', compact('participaciones'))
            ->with('i', ($request->input('page', 1) - 1) * $participaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $participaciones = new Participaciones();

        return view('participaciones.create', compact('participaciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParticipacionesRequest $request): RedirectResponse
    {
        Participaciones::create($request->validated());

        return Redirect::route('participaciones.index')
            ->with('success', 'Participaciones created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $participaciones = Participaciones::find($id);

        return view('participaciones.show', compact('participaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $participaciones = Participaciones::find($id);

        return view('participaciones.edit', compact('participaciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParticipacionesRequest $request, Participaciones $participaciones): RedirectResponse
    {
        $participaciones->update($request->validated());

        return Redirect::route('participaciones.index')
            ->with('success', 'Participaciones updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Participaciones::find($id)->delete();

        return Redirect::route('participaciones.index')
            ->with('success', 'Participaciones deleted successfully');
    }
}
