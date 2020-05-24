@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="width:100%">
                <div class="card-header">Create Player</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('addPlayer') }}" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="form-group row">
                            <label for="ign" class="col-md-2">Player IGN</label>

                            <div class="col-md-10">
                                <input id="ign" type="text" class="form-control" name="ign" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2">Real name</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
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
                                <textarea id="bio" type="text" class="form-control" name="bio" required></textarea>
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
                            <label for="earning" class="col-md-2">Earning</label>

                            <div class="col-md-10">
                                <input id="earning" type="text" class="form-control" name="earning" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-2">Role</label>

                            <div class="col-md-10">
                                <input id="role" type="text" class="form-control" name="role" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="twitch" class="col-md-2">Twitch URL</label>

                            <div class="col-md-10">
                                <input id="twitch" type="text" class="form-control" name="twitch" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="twitter" class="col-md-2">Twitter URL</label>

                            <div class="col-md-10">
                                <input id="twitter" type="text" class="form-control" name="twitter" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram" class="col-md-2">Instagram</label>

                            <div class="col-md-10">
                                <input id="instagram" type="text" class="form-control" name="instagram" required>
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
