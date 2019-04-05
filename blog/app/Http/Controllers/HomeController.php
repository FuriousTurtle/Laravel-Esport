<?php

namespace App\Http\Controllers;

use PDO;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function oof()
    {
        return view('components.accueil.accueil');
    }
    public function schedule(){
        /*$BDD = new PDO('mysql:host=localhost;dbname=e-sport', 'root2', 'azerty');*/
        $result = DB::select('SELECT * FROM result WHERE score_team1 AND score_team2 = TBD');
        $reponse = $result->fetchAll();
        return view('components.schedule.schedule', ['result' => $reponse] );
    }
}