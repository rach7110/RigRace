@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 pull-right">
            <a href="{{route('events.create')}}">
                <button class="btn btn-primary">New Event</button>
            </a>
        </div>
    </div>

    </br>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">My Events</div>

                <div class="panel-body">
                @foreach ($events as $event)
                    <div>
                        {{$event->eventname}}
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection