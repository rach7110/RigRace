    {{ csrf_field() }}
    <!-- EVENT NAME -->
    <div class="form-group">
        <label for="eventname" class="col-sm-2 control-label">Event Name</label>
        <div class="col-sm-10">
            <input type="text" name="eventname" id="eventname" class="form-control" value="@if(isset($result->eventname)) {{ $result->eventname }} @elseif(old('eventname')) {{ old('eventname') }} @endif" placeholder="Summer Series Races" >
        </div>
    </div>
    <!-- HOST -->
    <div class="form-group">
        <label for="venue" class="col-sm-2 control-label">Venue</label>
        <div class="col-sm-10">
            <input type="text" name="venue" class="form-control" id="venue" value="@if(isset($result->host)) {{ $result->host }} @elseif(old('host')) {{ old('host') }} @endif" placeholder="Windy Yacht Club" />
        </div>
    </div>
    <!-- START DATE -->
    <div class="form-group">
        <label for="start_date" class="col-sm-2 control-label">Start Date</label>
        <div class="col-sm-10">
            <input type="date" name="start_date" class="form-control" id="start_date" value="@if(isset($result->start_date)){{$result->start_date}}@elseif(old('start_date')) {{ old('start_date') }} @endif">
        </div>
    </div>
    <!-- END DATE -->
    <div class="form-group">
        <label for="end_date" class="col-sm-2 control-label">End Date</label>
        <div class="col-sm-10">
            <input type="date" name="end_date" class="form-control" id="end_date" value="@if(isset($result->end_date)){{$result->end_date}}@else(old('end_date')){{ old('end_date') }} @endif">
        </div>
    </div>
    