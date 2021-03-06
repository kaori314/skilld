@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="width:100%">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('addTeam') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2">Team name</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="logo" class="col-md-2">Team logo</label>
                            <div class="col-md-10">
                                <input type="file" id="logo" type="textarea"  name="logo">
                            </div>
                        </div>
                       

                        <div class="form-group row">
                            <label for="players" class="col-md-2">Players</label>
                            <div class="col-md-10">
                               <select type="text" id="player_input" name="players[]" multiple="multiple" style="width:100%">
                                    @foreach($players as $player)
                                      <option value="{{$player->id}}">{{$player->ingame_name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-md-2">Country</label>

                            <div class="col-md-10">
                                <select type="text" id="country" name="country" style="width:100%">
                                       @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bio" class="col-md-2">Team Bio</label>

                            <div class="col-md-10">
                                <textarea id="bio" type="text" class="form-control" name="bio" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-2">Category</label>
                            <div class="col-md-10">
                               <select type="text"  name="category">
                                    <option value="RLeague">Rocket League</option>
                                      <option value="Valorant">Valorant</option>

                                   
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="earning" class="col-md-2">Earning</label>

                            <div class="col-md-10">
                                <input id="earning" type="text" class="form-control" name="earning" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="established" class="col-md-2">Established</label>

                            <div class="col-md-10">
                                <input id="established" type="text" class="form-control date-picker" name="established" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="disbanded" class="col-md-2">Disbanded</label>

                            <div class="col-md-10">
                                <input id="disbanded" type="text" class="form-control date-picker" name="disbanded" required>
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



<script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link  href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script type="application/javascript" src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="application/javascript" src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

<script type="application/javascript">
    $(document).ready(function() {
        $("#player_input").select2();
        $('.date-picker').datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });
</script>



@endsection

