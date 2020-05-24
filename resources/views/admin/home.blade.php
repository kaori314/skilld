@extends('layouts.app')




@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href='admin/post/create'> Create new post </a>
                    <br>
                    <a href='admin/player/create'> Add player </a>
                    <br>
                    <a href='admin/team/create'> Add team </a>
                    <br>
                    <a href='admin/player/all'> Show all players </a>
                    <br>
                    <a href='admin/team/all'> Show all team </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

