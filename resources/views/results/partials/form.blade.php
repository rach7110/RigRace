    {{ csrf_field() }}
    <!-- EVENT NAME -->
    <div class="form-group">
        <label for="eventname" class="col-sm-2 control-label">Event Name</label>
        <div class="col-sm-10">
            <input type="text" name="eventname" id="eventname" class="form-control" placeholder="2017 Summer Series Races" value="@if(isset($result)) {{ $result->eventname }} @else {{ old('eventname') }} @endif ">
        </div>
    </div>
    <!-- HOST -->
    <div class="form-group">
        <label for="venue" class="col-sm-2 control-label">Venue</label>
        <div class="col-sm-10">
            <input type="text" name="venue" class="form-control" id="venue" placeholder="Windy Yacht Club" value="@if(isset($result)) {{ $result->venue }} @else {{ old('venue') }} @endif "/>
        </div>
    </div>
    <!-- START DATE -->
    <div class="form-group">
        <label for="start_date" class="col-sm-2 control-label">Start Date</label>
        <div class="col-sm-10">
            <input type="date" name="start_date" class="form-control" id="start_date" value="@if(isset($result)) {{ $result->start_date }} @else {{ old('start_date') }} @endif">
        </div>
    </div>
    <!-- END DATE -->
    <div class="form-group">
        <label for="end_date" class="col-sm-2 control-label">End Date</label>
        <div class="col-sm-10">
            <input type="date" name="end_date" class="form-control" id="end_date" value="@if(isset($result)) {{ $result->end_date }} @else {{ old('end_date') }} @endif">
        </div>
    </div>
    