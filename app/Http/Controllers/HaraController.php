<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Hara;
use App\models\Propri;


class HaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $haras = Hara::all();
        return view('Hara',['haras' => $haras]);

        //
    }

    public function index2()
    {
        $haras = Hara::all();
        return view('Haras',['haras' => $haras]);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Hara');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'age' => 'required',
            'couleur'=> 'required',
            'proprieteNom'=> 'required'
      ]);


      $hara=new Hara();
        $nom=$request->input('nom');
        $age=$request->input('age');
        $couleur=$request->input('couleur');
        $proprieteNom=$request->input('proprieteNom');

        $hara->nom=$nom;
        $hara->age=$age;
        $hara->couleur=$couleur;
        $hara->proprieteNom=$proprieteNom;
        $hara->save();
        


        $propri=new Propri();
        $nompro=$request->input('nompro');
        $prenompro=$request->input('prenompro');

        $propri->nompro=$nompro;
        $propri->prenompro=$prenompro;
    
        $propri->save();
        return redirect()->back();





      
     
        
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
