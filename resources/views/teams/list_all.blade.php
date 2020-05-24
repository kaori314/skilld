@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="width:100%">
              <div class="card-header">Teams</div>
                <table>
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Team name</th>
                      <th>Category</th>
                      <th>Country</th>
                      <th>Earning</th>
                      <th>Established</th>
                      <th>Disbanded</th>
                      <th>
                      </th>
                    </tr>
                  </thead>
                  @foreach ($teams as $team)
                    <tr>
                      <td>{{$team->id}}</td>
                      <td>{{$team->team_name}}</td>
                      <td>{{$team->category}}</td>
                      <td>{{$team->earning}}</td>
                      <td>{{$team->established}}</td>
                      <td>{{$team->disbanded}}</td>
 
                      <td><a href="{{route('showUpdateTeam', ['id'=>$team->id])}}">Update</a></td>
                    </tr>
                  @endforeach
                </table>
              </div>
            </div>
        </div>
    </div>
</div>


@endsection