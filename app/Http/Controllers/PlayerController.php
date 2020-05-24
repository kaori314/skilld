<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use Auth;
use App\Country;
use App\Team;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
    //
    public function createPlayer(){
        if (Auth::check()){
            $countries = Country::all();
            return view('players.create', ['countries'=>$countries]);
        }
        else{
            return redirect()->route('login');
        }
    }



    public function addPlayer(Request $request){
        if (Auth::check()){
            $name = $request->name;
            $ign = $request->ign;
            $player = new Player;
            $player->ingame_name = $ign;
            $player->real_name = $name;
            $player->bio = $request->bio;
            $player->country = $request->country;
            $player->earning = $request->earning;
            $player->role = $request->role;
            $player->twitch = $request->twitch;
            $player->twitter  = $request->twitter;
            $player->instagram = $request->instagram;
            $player->save();
            $player_id = $player->id;
            if ($request->file('image') != null){
                $image_name =  'player_' . $player_id . '.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('img'), $image_name);
                $player->image = $image_name;
                $player->save();
            }
            return redirect()->route('adminIndex');

        }
        else{
            return redirect()->route('login');
        }
    }

    public function showPlayer(Request $request, $id){
        $player = Player::where('id', $id)->get();
        // $ign = $p
        if (count($player) == 0){
            return redirect()->route('home');
        }
        $player = $player[0];
        $ign = $player->ingame_name;
        $real_name = $player->real_name;
        return view('players.show', ['ign'=>$ign, 'real_name'=>$real_name]);
    }

    public function getPlayerList(Request $request){
        // dd("HERE");
        $query = $_GET['q'];
        $player = Player::where('id', $query)->orWhere('ingame_name', 'like', '%' . $query . '%')->select('id', 'ingame_name')->get();
        if (count($player) == 0){
            return json_encode([]);
        }
        return json_encode([$player[0]]);
        
    }

    public function showAllPlayer(Request $request){
        if (Auth::check()){
            $players = Player::paginate(15);
            foreach ($players as $player){
                if ($player->team_id == null){
                    $player->team_name = "N/A";
                    continue;

                }
                else{
                    $player->team_name = Team::where('id', $player->team_id)->get()[0]->team_name;
                }
                // $player
                $player->country = Country::where('id', $player->country)->get()[0]->name;
            }
            return view('players.list_all', ['players'=>$players]);
        }
         else{
            return redirect()->route('login');
        }
    }

    public function showUpdatePlayer(Request $request, $id){
        if (Auth::check()){
            $player = Player::where('id', $id)->get();
            if (count($player) == 0){
                return redirect()->route('home');
            }
            $player = $player[0];
            $countries = Country::all();
            return view('players.update', ['player'=>$player, 'countries'=>$countries]);
        }
        else{
            return redirect()->route('login');
        }
    }

    public function updatePlayer(Request $request){
        if (Auth::check()){
            // dd($request->id);
            Player::where('id', $request->id)->update([
                'ingame_name' => $request->ign,
                'real_name' => $request->name,
                'bio'=>$request->bio,
                'country'=>$request->country,
                'earning'=>$request->earning,
                'role'=>$request->role,
                'twitch'=>$request->twitch,
                'twitter'=>$request->twitter,
                'instagram'=>$request->instagram
            ]);
            if ($request->file('image') != null){
                $image_name =  'player_' . $request->id . '.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('img'), $image_name);
                Player::where('id', $request->id)->update(['image'=>$image_name]);
            }
            return redirect()->route('showAllPlayer');
        }
        else{
            return redirect()->route('login');
        }
    }
}
