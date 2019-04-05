<?php

namespace App\Http\Controllers;

use DB;

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
    public function schedule()
    {
        $result = DB::select("SELECT team.equip_name, score_team1, score_team2 FROM result INNER JOIN team ON result.team_id_1 = team.id OR result.team_id_2 = team.id WHERE result.score_team1 = 'TBD' AND result.score_team2 = 'TBD'");
        return view('components.schedule.schedule', ['result' => $result]);
    }
    public function team($id)
    {
        $team = DB::select("SELECT * FROM team INNER JOIN player ON team.id = player.team_id WHERE team.id = " . $id);
        return view('components.team.team', ['team' => $team]);
    }
}