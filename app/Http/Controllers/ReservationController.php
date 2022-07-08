<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Reservation;
use App\Models\Categorie;
use App\Models\Option;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createReservation');
        //
    }

    public function afficher1()
    {
        $reservations = reservation::all();
        $reservations = DB::select("select id, dateD,dateF,idPeriode,idChambre from reservation where datef  > now() order by dateF");
        return view('affichernow',['reservations' => $reservations]);
       
        //
    }

    public function afficher2()
    {
        $options = Option::all();
        return view('afoption',['option' => $options]);
       
       
        //
    }

    public function afficher3()
    {
        return view('annuler');
       
       
        //
    }

    public function afficherannuler()


    {

        
    //     $reservation=new Reservation();
    //     $dated=$request->input('dateDebut');
    //     $datef=$request->input('dateFin');
    //     $idperiode=$request->input('idperiode');
        
       
       
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
        $validatedData = $request->validate([
            'dateDebut' => 'required|date|before:dateFin',
            'dateFin' => 'required|date|after:dateDebut',
            'idperiode'=> 'required|between:1,3'
      ]);



        $reservation=new Reservation();
        $dated=$request->input('dateDebut');
        $datef=$request->input('dateFin');
        $idperiode=$request->input('idperiode');
        $idCategorie=$request->input("idCategorie");

        $disponibilite = DB::select("select chambre.id, videoprojecteur from 
        chambre inner join categorie on chambre.idCategorie = categorie.id where chambre.idCategorie=?
        and chambre.id not in (select reservation.idChambre from reservation where
        (?<=dateD and ?>=dateF) or
        (?<=dateD and ?<=dateF) or 
        (?>=dateD and ?>=dateF) or
        (dateD>=?<=dateF and dateD>=?<=dateF) or
        (?<=dateD and dateD>=?<=dateF) or 
        (dateD>=?<=dateF and ?>=dateF)) and videoprojecteur = '1' order by id;", [$idCategorie, $dated, $datef, $datef, $datef, $datef, $dated, $dated, $dated, $datef, $dated, $datef, $dated, $dated, $datef]  );

        DB::insert("INSERT INTO `reservation` (`dateD`, `dateF`, `idPeriode`, `idChambre`)
            VALUES (?,?,?,?)", [$dated,$datef,$idperiode,$disponibilite[0]->id]);

        return redirect()->route('accueil')->with('success','réservation enregistrée');

        //dd($request);
        //dd($disponibilite);
    }



    




    public function store1(Request $request)
    {
       


        $reservation=new Reservation();
        $sejour=$request->input("sejour");

       

        DB::insert(" update `reservation` set sejour= ? where id= ?", []);

        return redirect()->route('accueil');

        //dd($request);
        //dd($disponibilite);
    }





    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'dateDebut' => 'required|date|before:dateFin',
    //         'dateFin' => 'required|date|after:dateDebut',
    //         'idperiode'=> 'required|between:1,3'
    //   ]);



    //     $reservation=new Reservation();
    //     $dated=$request->input('dateDebut');
    //     $datef=$request->input('dateFin');
    //     $idperiode=$request->input('idperiode');
     

       

    //     $reservation->dateD=$dated;
    //     $reservation->dateF=$datef;
    //     $reservation->idPeriode=$idperiode;
        
    //     $reservation->save();
    //     return redirect()->back();

    //     //dd($request);
    // }



    

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
