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
        $result = DB::select("SELECT team.team_name, score_team1, score_team2, team.logo, result.date FROM result INNER JOIN team ON result.team_id_1 = team.id OR result.team_id_2 = team.id WHERE result.score_team1 = 'TBD' AND result.score_team2 = 'TBD'");
        return view('components.schedule.schedule', ['result' => $result]);
    }

    public function team($id)
    {
        $team = DB::select("SELECT * FROM team INNER JOIN player ON team.id = player.team_id WHERE player.team_id = " . $id);
        return view('components.team.team', ['team' => $team]);
    }

    public function teams()
    {
        $teams = DB::select("SELECT logo, team_name, id FROM team");
        return view('components.teams.teams', ['teams' => $teams]);
    }

    public function media()
    {
        return view('components.media.media');
    }

    public function player($id)
    {
        $player = DB::select("SELECT birth_player, country_player, img_player, name_player, pseudo_player, roles_player, team.team_name, team.logo, team.flag FROM player INNER JOIN team ON team.id = player.team_id WHERE player.id = " . $id);
        return view('components.player.player', ['player' => $player]);
    }
}