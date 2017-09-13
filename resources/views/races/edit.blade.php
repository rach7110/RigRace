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
                <h1>Edit Race {{ $race->number }}</h1>
            </div>
        </div>
        <!-- EDIT FORM -->
        <h1>{{ $race->name }}</h1>
        <form class="form-horizontal" method="POST" action="{{route('races.update', ['$id' => $race->id])}}">
            <input type="hidden" name="_method" value="PUT">  
            @include('races.partials.form')

            <!-- SUBMIT -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Edit">
                </div>
            </div>
        </form>
    </div>
@endsection