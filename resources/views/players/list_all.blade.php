@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="width:100%">
            	<div class="card-header">Players</div>
            		<table>
            			<thead>
            				<tr>
            					<th>Id</th>
            					<th>IGN</th>
            					<th>Real name</th>
            					<th>Team</th>
            					<th>Country</th>
            					<th>Earning</th>
            					<th>Role</th>
            					<th>Twitch</th>
            					<th>Twitter</th>
            					<th>Instagram</th>
            					<th>
            					</th>
            					<th>
            					</th>
            				</tr>
            			</thead>
            			@foreach ($players as $player)
            				<tr>
            					<td>{{$player->id}}</td>
            					<td>{{$player->ingame_name}}</td>
            					<td>{{$player->real_name}}</td>
            					<td>{{$player->team_name}}</td>
            					<td>{{$player->country}}</td>
            					<td>{{$player->earning}}</td>
            					<td>{{$player->role}}</td>
            					<td>{{$player->twitch}}</td>
            					<td>{{$player->twitter}}</td>
            					<td>{{$player->instagram}}</td>
            					<td><a href="{{route('showUpdatePlayer', ['id'=>$player->id])}}">Update</a></td>
            				</tr>
            			@endforeach
            		</table>
            	</div>
            </div>
        </div>
    </div>
</div>


@endsection