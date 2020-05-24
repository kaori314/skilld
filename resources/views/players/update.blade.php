@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="width:100%">
                <div class="card-header">Edit player</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updatePlayer') }}" enctype="multipart/form-data">
                        @csrf
                         <input name="id" type="hidden" value="{{$player->id}}">
                        <div class="form-group row">
                            <label for="ign" class="col-md-2">Player IGN</label>

                            <div class="col-md-10">
                                <input id="ign" type="text" class="form-control" name="ign" required autofocus value="{{$player->ingame_name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2">Real name</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="name" required value ="{{$player->real_name}}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="image" class="col-md-2">Player image</label>
                            <div class="col-md-10">
                                <input type="file" id="image" type="textarea"  name="image">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="bio" class="col-md-2">Player Bio</label>

                            <div class="col-md-10">
                                <textarea id="bio" type="text" class="form-control" name="bio" required >{{$player->bio}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-2">Country</label>

                            <div class="col-md-10">
                                <select type="text" id="country" name="country" style="width:100%">
                                       @foreach($countries as $country)
                                            @if ($country->id == $player->country)
                                            <option value="{{ $country->id }}" selected>{{ $country->name }}</option>
                                            @else
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endif
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="earning" class="col-md-2">Earning</label>

                            <div class="col-md-10">
                                <input id="earning" type="text" class="form-control" name="earning" required value="{{$player->earning}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-2">Role</label>

                            <div class="col-md-10">
                                <input id="role" type="text" class="form-control" name="role" required value="{{$player->role}}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="twitch" class="col-md-2">Twitch URL</label>

                            <div class="col-md-10">
                                <input id="twitch" type="text" class="form-control" name="twitch" value="{{$player->twitch}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="twitter" class="col-md-2">Twitter URL</label>

                            <div class="col-md-10">
                                <input id="twitter" type="text" class="form-control" name="twitter" value="{{$player->twitter}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram" class="col-md-2">Instagram</label>

                            <div class="col-md-10">
                                <input id="instagram" type="text" class="form-control" name="instagram" value="{{$player->instagram}}">
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
