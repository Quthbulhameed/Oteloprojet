<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;


class ChambreController extends Controller
{

 
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chambres = Chambre::all();
        $categories = Categorie::all();
       return view('chambres',['chambres' => $chambres,'categories' => $categories]);

        
    
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $chambre= Chambre::create([
            'nbCouchage' =>2,
            'porte' => 'B',
            'etage' => 10,
            'idCategorie' => 1,
            'baignoire' => 0,
            'prixBase' => 50
        ]);
        //$chambre = new Chambre;
        $chambre->porte='C';
        //$chambre->etage=$request->etage;
        $chambre->save();

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

    public function index2()
    {
        $categories = DB::select('select * from categorie');
        $chambres = DB::select('select * from chambre where idCategorie=3 AND baignoire>0 AND prixBase<100');
        return view('chambrespremium', ['chambres' => $chambres,'categories' => $categories]);
        return view('chambrespremium', ['categories' => $categories]);

        
        //17/03
        
    
        
        
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

    //10/03
    public function indexcategorie(Request $request)
    {
        $idCategorie=$request->input("idCategorie");
      //  dd($idCategorie);
        $categorie = Categorie::all();
        $chambre = DB::select('SELECT * FROM chambre WHERE idCategorie = ?', [$idCategorie]);
         //obtention des chambres
        //$chambres=$categorie ->chambres();
        return view('chambres',['chambres'=>$chambre,'categories' => $categorie]);
               
    }
    //10/03
    public function dispo(Request $request)
    {   
        $idCategorie=$request->input("idCategorie");
        $dateD = $request->input('dateDebut');
        $dateF = $request->input('dateFin');

        $categorie = Categorie::all();
        $disponibilite = DB::select("select chambre.id, nbCouchage, porte, etage, libelle, baignoire, idCategorie from 
        chambre inner join categorie on chambre.idCategorie = categorie.id where chambre.idCategorie=?
        and chambre.id not in (select reservation.idChambre from reservation where
        (?<=dateD and ?>=dateF) or
        (?<=dateD and ?<=dateF) or 
        (?>=dateD and ?>=dateF) or
        (dateD>=?<=dateF and dateD>=?<=dateF) or
        (?<=dateD and dateD>=?<=dateF) or 
        (dateD>=?<=dateF and ?>=dateF)) order by id;", [$idCategorie, $dateD, $dateF, $dateF, $dateF, $dateF, $dateD, $dateD, $dateD, $dateF, $dateD, $dateF, $dateD, $dateD, $dateF]  );
        
        return view('dispo',['chambres'=>$disponibilite,'categories' => $categorie]);
        
    
    }

    public function devoir(Request $request)
    { 
        
        
        $idCategorie=$request->input("idCategorie");
      //  dd($idCategorie);
        $categorie = Categorie::all();
        $chambre = DB::select('SELECT * FROM chambre ORDER BY prixBase ');
         //obtention des chambres
        //$chambres=$categorie ->chambres();
        return view('chambres',['chambres'=>$chambre,'categories' => $categorie]);
        

    }




    //DEVOIR 
    public function mettre(Request $request)
    { 
       
       return view('devoir');
    }
  
    //DEVOIR 
    public function mettrecat(Request $request)
    { 

        
       
        $categorie=new Categorie();
        $id=$request->input('id');
        $libelle=$request->input('libelle');
        

        $categorie->libelle=$libelle;
        $categorie->id=$id;

        $categorie->save();

    //    return view('Hara');
        
    }

    //DEVOIR 
    public function trois(Request $request)
    { 
        
        
        $idCategorie=$request->input("idCategorie");
      //  dd($idCategorie);
        $categorie = Categorie::all();
        $chambre = DB::select("select * from chambre where description = 'mer'");
         //obtention des chambres
        //$chambres=$categorie ->chambres();
        return view('chambres',['chambres'=>$chambre,'categories' => $categorie]);
        

    }





    public function vueSurmer(Request $request)
    { 
        
        
        $idCategorie=$request->input("idCategorie");
      //  dd($idCategorie);
        $categorie = Categorie::all();
        $chambre = DB::select("select * from chambre where description = 'sable'");
         //obtention des chambres
        //$chambres=$categorie ->chambres();
        return view('vueSurmer',['chambres'=>$chambre,'categories' => $categorie]);
        

    }

    public function videoprojecteur(Request $request)
    { 
        
        
        $idCategorie=$request->input("idCategorie");
      //  dd($idCategorie);
        $categorie = Categorie::all();
        $chambre = DB::select("select * from chambre where videoprojecteur = '1'");
         //obtention des chambres
        //$chambres=$categorie ->chambres();
        return view('projecteur',['chambres'=>$chambre,'categories' => $categorie]);
        

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
        