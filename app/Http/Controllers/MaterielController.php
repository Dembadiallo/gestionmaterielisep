<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use Illuminate\Http\Request;

class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materiels = Materiel::latest()->paginate(5);
        return view('materiels.index',compact('materiels'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
        public function create()
    {
        return view('materiels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nom' => 'required',
        'description' => 'required',
        'inventaire' => 'required',
        'etat' => 'required',
    ]);

    Materiel::create($request->all());

    return redirect()->route('materiels.index')->with('success','Materiel ajouter avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materiel $materiel)
    {
        return view('materiels.show',compact('materiel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materiel $materiel)
    {
        return view('materiels.edit',compact('materiel'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materiel $materiel)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'inventaire' => 'required',
            'etat' => 'required',
        ]);

        $materiel->update($request->all());

        return redirect()->route('materiels.index')->with('success','Materiel modifier avec  successer');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materiel $materiel)
    {
        $materiel->delete();

        return redirect()->route('materiels.index')->with('success','Materiel supprimer avec  successer');
    }
}
