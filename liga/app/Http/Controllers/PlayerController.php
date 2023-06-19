<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function list()
    {
        $players = Player::all();
        return view('players/manageplayers', compact('players'));
    }

    public function add(Request $request)
    {
        $addPlayer = new Player;
        $addPlayer->name = $request->name;
        $addPlayer->surname = $request->surname;
        $addPlayer->yearOfBirth = $request->yearOfBirth;
        $addPlayer->salary = $request->salary;
        $addPlayer->save();
        return PlayerController::list();
        // return redirect()->route('players.manageplayers');
    }

    public function remove($id)
    {
        $player = Player::find($id);

        if ($player->team()->count() > 0) {
            $message = "You cannot delete a player still associated to a team!";
            $players = Player::all();
            return view('players.manageplayers', compact('message', 'players'));
        } else {
            Player::destroy($id);
            return PlayerController::list();
        }
    }
}
