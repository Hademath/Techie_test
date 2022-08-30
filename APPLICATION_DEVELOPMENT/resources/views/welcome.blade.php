@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>Welcome to  student Score Record</p>
                <br>
                <a href="/students" class="btn btn-outline-primary"> Students List</a>
            </div>
        </div>
    </div>
@endsection