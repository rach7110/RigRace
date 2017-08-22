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
                <h1>New Boat</h1>
            </div>
        </div>
        <!-- CREATE FORM -->
        <form class="form-horizontal" method="post" action="{{route('results.store')}}">
            @include('boats.partials.form')

            <!-- SUBMIT -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Create">
                </div>
            </div>            
        </form>
    </div>

@endsection