<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function list()
    {
        $teams = Team::all();
        return view('teams/manageteams', compact('teams'));
    }

    public function add(Request $request)
    {
        $addTeam = new Team;
        $addTeam->name = $request->name;
        $addTeam->coach = $request->coach;
        $addTeam->category = $request->category;
        $addTeam->budget = $request->budget;
        $addTeam->save();
        return TeamController::list();
    }

    public function edit($id)
    {
        $team = Team::find($id);
        return view('teams.editteam', compact('team'));
    }

    public function update(Request $request)
    {
        $updatedTeam = Team::find($request->id);
        $updatedTeam->name = $request->name;
        $updatedTeam->coach = $request->coach;
        $updatedTeam->category = $request->category;
        $updatedTeam->budget = $request->budget;
        $updatedTeam->save();
        return TeamController::list();
    }

    public function remove($id)
    {
        $team = Team::find($id);

        if ($team->players()->count() > 0) {
            $message = "You cannot delete a team with players still associated!";
            $teams = Team::all();
            return view('teams.manageteams', compact('message', 'teams'));
        } else {
            Team::destroy($id);
            return TeamController::list();
        }
    }
}
