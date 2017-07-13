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
            <h1>Create New Event</h1>
        </div>
    </div>

    <form class="form-horizontal" method="post" action="{{route('events.store')}}">
        {{ csrf_field() }}
        <!-- EVENT NAME -->
        <div class="form-group">
            <label for="eventname" class="col-sm-2 control-label">Event Name</label>
            <div class="col-sm-10">
                <input type="text" id="eventname" class="form-control" value="{{old('eventname')}}" placeholder="2017 Summer Series Races">
            </div>
        </div>
        <!-- EVENT HOST -->
        <div class="form-group">
            <label for="host" class="col-sm-2 control-label">Host</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="host" value="{{ old('host')}}"  placeholder="Windy Yacht Club" required>
            </div>
        </div>
        <!-- START DATE -->
        <div class="form-group">
            <label for="start_date" class="col-sm-2 control-label">Start Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="start_date" value="{{old('start_date')}}"  required>
            </div>
        </div>
        <!-- END DATE -->
        <div class="form-group">
            <label for="end_date" class="col-sm-2 control-label">End Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="end_date" value="{{old('end_date')}}"  equired>
            </div>
        </div>
        <!-- SUBMIT -->
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary" value="Create">
            </div>
        </div>

    </form>


</div>
    
@endsection