@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <a href="{{ url()->previous() }}">
                < Back
            </a>
        </div>
    </div>

    </br>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Create New Event</h1>
        </div>
    </div>
</div>
    
@endsection