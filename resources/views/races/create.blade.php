@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <a href="{{ url()->previous() }}">
                    < Back
                </a>
            </div>
        </div>

        </br>
        <!-- HEADER -->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h4>{{ $result->eventname }}</h4>
                <h1>Create Race</h1>
            </div>
        </div>
        <!-- CREATE FORM -->
        <form class="form-horizontal" method="post" action="{{route('results.races.store', $result)}}">
            @include('races.partials.form')

            <!-- SUBMIT -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Create">
                </div>
            </div>            
        </form>
    </div>

@endsection