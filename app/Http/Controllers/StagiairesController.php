<?php

namespace App\Http\Controllers;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiairesController extends Controller
{
    public function index(){
        
        $Stagiaires= Stagiaire::all();
        
        return response()->json($Stagiaires);
    }
    public function create() {

        return view('addNewStagiaire');
    }

    public function store(Request $request){
        $data = $request->validate([
            'nom' => 'required|string|max:25',
            'prenom' => 'required|string|max:25',
            'filiere' => 'required|string|max:25',
            'status' => 'required|string|max:1',
           'date_naisance'=>'required|date'
        ]);
        
        $newStagiaire= Stagiaire::create($data);
        return response()->json($newStagiaire);
        
        
    }
    public function edit($id){
        
        $StagiairesEdit= Stagiaire::findOrFail($id);
        return view('editStagaire',compact('StagiairesEdit'));
    }
    public function show($id)
    {

        $StagiairesShow = Stagiaire::findOrFail($id);
        return response()->json($StagiairesShow);
        
    }
    public function update(Request $request, $id)
    {
        $StagiairesU = Stagiaire::findOrFail($id);
        $data = $request->validate([
            'nom' => 'required|string|max:25',
            'prenom' => 'required|string|max:25',
            'filiere' => 'required|string|max:25',
            'status' => 'required|string|max:1',
            'date_naisance' => 'required|date'
        ]);
        $StagiairesU->update($data);
        return redirect()->route('Stagiaires.index')->with('success', 'Stagiaire updated successfully');
    }

    
}