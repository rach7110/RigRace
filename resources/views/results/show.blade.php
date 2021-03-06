@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('results.index') }}">
        < All Results
    </a>
    </br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{$result->eventname}}</h3>
        </div>
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

    <!-- BOATS -->
    @include('partials.boats')

    <!-- RESULTS -->
     <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Races</h3>
        </div>
        <div class="panel-body">
        <!-- NEW RACE -->
        <div class="pull-right right-margin">
            <a href="{{ route('results.races.create', $result->id) }}">
                <button class="btn btn-primary">+ Race</button>
            </a>
        </div>
            @if(count($races) == 0)
                <p>No races yet. Click 'Add Races' to start scoring.</p>
            @else
                <div class="row">
                    <div class="col-md-1">Race</div>
                    <div class="col-md-2"></div>
                    <div class="col-md-1">Distance</div>
                    <div class="col-md-1">Units</div>
                </div>
                @foreach ($races as $race)
                    <div class="row">
                        <div class="col-md-1">{{ $race->number }}</div>
                        <div class="col-md-2">{{ $race->name }}</div>
                        <div class="col-md-1">{{ $race->distance}}</div>
                        <div class="col-md-1">{{ $race->distance_units}}</div>
                        <!-- EDIT -->
                        <div class="col-md-1"><a href="{{ route('races.edit', $race->id)}}">Edit</a></div>
                        <!-- DELETE -->
                        <form method="post" action="{{ route('races.destroy', $race->id) }}">
                            {{ csrf_field() }}
                            <button class="btn btn-danger btn-link" type="submit" style="padding-top: 0px; border-top-width: 0px;">Delete</button>
                            <input type="hidden" name="_method" value="DELETE">
                        </form>
                    </div>
                @endforeach
            @endif

        </div>
    </div>

</div>
    
@endsection