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
                        <form method="post" action="{{route('results.destroy', $result->id)}}">
                            {{$result->eventname}}
                            <a href="{{ route('results.show', $result->id) }}">View</a>
                            <a href="{{ route('results.edit', $result->id) }}">Edit</a>
                            {{ csrf_field() }}
                            <button class="btn btn-default" type="submit">Delete</button>
                            <input type="hidden" name="_method" value="DELETE">
                        </form>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection