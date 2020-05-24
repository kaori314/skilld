<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Team;
use App\Player;
use App\Country;

class TeamController extends Controller
{
    //
    public function createTeam(){
		if (Auth::check()){
			$players = Player::all();
			$countries = Country::all();
			// dd($players);	
			return view('teams.create', ['players'=>$players, 'countries'=>$countries]);
		}
		else{
			return redirect()->route('login');
		}
	}

	public function addTeam(Request $request){
		if (Auth::check()){
			// $title = $request->input('title');
			// $content = $request->input('content');
			// $post = new Post;
			// $post->title = $title;
			// $post->content = $content;
			// $post->author_id = Auth::user()->id;
			// $post->save();
			// $post_id = $post->post_id;
			// if ($request->file('thumb') != null){
			// 	$thumb_name =  'thumb_' . $post_id . '.'.$request->thumb->getClientOriginalExtension();
			// 	$request->thumb->move(public_path('img'), $thumb_name);
			// }
			// dd($request->players);
			$players = '';
			foreach ($request->players as $player_id){
				$players .= $player_id . "|";
			}
			$team_name = $request->name;
			$team = new Team;
			$team->team_name = $team_name;
			$team->player_ids = $players;
			$team->bio = $request->bio;
			$team->category = $request->category;
			$team->country = $request->country;
			$team->earning = $request->earning;
			$team->established = $request->established;
			$team->disbanded = $request->disbanded;
			$team->save();
			$team_id = $team->id;




			foreach ($request->players as $player_id){
				Player::where('id', $player_id)->update(['team_id'=>$team_id]);
			}
			if ($request->file('logo')){
				$thumb_name = 'team_logo_' . $team_id . '.' . $request->logo->getClientOriginalExtension();
				$request->logo->move(public_path('img'), $thumb_name);
				$team->logo = $thumb_name;
				$team->save();
			}
			return redirect()->route('adminIndex');

		}
		else{
			return redirect()->route('login');
		}
	}

	public function showAllTeam(Request $request){
		if (Auth::check()){
			$teams = Team::all();
			$players = Player::all();
			foreach ($teams as $team){
				$team->player_ids = explode('|', $team->player_ids);
				$team->country = Country::where('id', $team->country)->get()[0]->name;
			}
			return view('teams.list_all', ['teams'=>$teams]);
		}
		else{
			return redirect()->route('login');
		}
	}

	public function showUpdateTeam(Request $request, $id){
		if (Auth::check()){
			$team = Team::where('id', $id)->get();
			if (count($team) == 0){
				return redirect()->route('adminIndex');
			}
			$team = $team[0];
			$team->player_ids = explode('|', $team->player_ids);
			$players = Player::all();
			$countries = Country::all();
			return view('teams.update', ['team'=>$team, 'players'=>$players, 'countries'=>$countries]);
		}
		else{
			return redirect()->route('login');
		}
	}

	public function updateTeam(Request $request){
		if (Auth::check()){
			$players = '';
			foreach ($request->players as $player_id){
				$players .= $player_id . "|";
			}
			Team::where('id', $request->id)->update([
				'team_name'=>$request->name,
				'player_ids'=>$players,
				'country'=>$request->country,
				'bio'=>$request->bio,
				'category'=>$request->category,
				'earning'=>$request->earning,
				'established'=>$request->established,
				'disbanded'=>$request->disbanded
			]);
			if ($request->file('logo')){
				$thumb_name = 'team_logo_' . $team_id . '.' . $request->logo->getClientOriginalExtension();
				$request->logo->move(public_path('img'), $thumb_name);
				Team::where('id', $request->id)->update(['logo'=>$thumb_name]);
			}
			return redirect()->route('showAllTeam');
		}	
		else{
			return redirect()->route('login');
		}
	}
}
