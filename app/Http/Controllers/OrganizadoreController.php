<?php

namespace App\Http\Controllers;

use App\Models\Organizadore;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\OrganizadoreRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OrganizadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $organizadores = Organizadore::paginate();

        return view('organizadore.index', compact('organizadores'))
            ->with('i', ($request->input('page', 1) - 1) * $organizadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $organizadore = new Organizadore();

        return view('organizadore.create', compact('organizadore'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrganizadoreRequest $request): RedirectResponse
    {
        Organizadore::create($request->validated());

        return Redirect::route('organizadores.index')
            ->with('success', 'Organizadore created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $organizadore = Organizadore::find($id);

        return view('organizadore.show', compact('organizadore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $organizadore = Organizadore::find($id);

        return view('organizadore.edit', compact('organizadore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrganizadoreRequest $request, Organizadore $organizadore): RedirectResponse
    {
        $organizadore->update($request->validated());

        return Redirect::route('organizadores.index')
            ->with('success', 'Organizadore updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Organizadore::find($id)->delete();

        return Redirect::route('organizadores.index')
            ->with('success', 'Organizadore deleted successfully');
    }
}
