@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('results.index') }}">
        < All Results
    </a>

    <div class="row">
        <div class="pull-right right-margin">
            <a href="">
                <button class="btn btn-primary">Add Boat</button>
            </a>
        </div>
        <div class="pull-right right-margin">
            <a href="">
                <button class="btn btn-primary">Add Race</button>
            </a>
        </div>
    </div>
    </br>
    <div class="panel panel-default">
        <div class="panel-heading">{{$result->eventname}}</div>
        <div class="panel-body">
            <div>
                <label>Host:</label>
                {{ $result->venue }}
            </div>
            <div>
                <label>Start Date:</label>
                {{ $result->start_date }}
            </div>
            <div>
                <label>End Date:</label>
                {{ $result->end_date }}
            </div>
            <div>
                <label>User:</label>
                {{ $user->id}}
            </div>
            <div class="row">
                <!-- EDIT -->
                <div class="col-md-1">
                    <a href="{{ route('results.edit', $result->id) }}">Edit</a>
                </div>
                <!-- DELETE -->
                <form method="post" action="{{route('results.destroy', $result->id)}}">
                    {{ csrf_field() }}
                    <button class="btn btn-danger btn-link" type="submit" style="padding-top: 0px; border-top-width: 0px;">Delete</button>
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </div>
        </div>
    </div>

</div>
    
@endsection