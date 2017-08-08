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

        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h1>Edit Results</h1>
            </div>
        </div>
        <form class="form-horizontal" method="post" action="{{route('results.update', $result->id)}}">
            @include('results.partials.form')
        </form>
    </div>
@endsection