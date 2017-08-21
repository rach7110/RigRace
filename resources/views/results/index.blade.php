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
                    <div class="row result-groups" style="margin-bottom: 10px;">
                        <div class="col-md-6">
                            {{$result->eventname}}
                        </div>

                        <form method="post" action="{{route('results.destroy', $result->id)}}">
                            <a href="{{ route('results.show', $result->id) }}">
                                <button type="button" class="btn btn-primary btn-sm">View</button>
                            </a>
                            <a href="{{ route('results.edit', $result->id) }}">
                                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                            </a>
                            {{ csrf_field() }}
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
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