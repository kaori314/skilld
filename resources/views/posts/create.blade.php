@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="width:100%">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('addPost') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-2">Post title</label>

                            <div class="col-md-10">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-2">Post content</label>

                            <div class="col-md-10">
                                <textarea id="content" type="textarea" class="form-control" name="content" required autofocus style="height:200px;"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="thumb" class="col-md-2">Post thumbnail</label>
                            <div class="col-md-10">
                                <input type="file" id="thumb" type="textarea"  name="thumb">
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
