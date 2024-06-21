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
}