@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 pull-right">
            <a href="{{route('results.create')}}">
                <button class="btn btn-primary">New Result</button>
            </a>
        </div>
    </div>

    </br>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">My Result Groups</div>

                <div class="panel-body">
                @foreach ($results as $result)
                    <div>
                        {{$result->eventname}}
                        <a href="{{ route('results.show', $result->id) }}">View</a>
                        <a href="{{ route('results.edit', $result->id) }}">Edit</a>
                        <a href="">Delete</a>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection