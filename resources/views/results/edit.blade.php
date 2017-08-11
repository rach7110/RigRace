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
                <h1>Edit Results</h1>
            </div>
        </div>
        <!-- EDIT FORM -->
        <form class="form-horizontal" method="POST" action="{{route('results.update', ['$id' => $result->id])}}">
            {{ method_field('PUT') }}
            <!-- equivalent of helper method above   -->
            <!-- <input type="hidden" name="_method" value="PUT">   -->
            @include('results.partials.form')

            <!-- SUBMIT -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Edit">
                </div>
            </div>
        </form>
    </div>
@endsection