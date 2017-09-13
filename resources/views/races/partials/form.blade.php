    {{ csrf_field() }}
    <!-- RACE NAME -->
    <div class="form-group">
        <label for="race_name" class="col-sm-2 control-label">Race Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" id="race_name" class="form-control" value="@if(isset($race->name)) {{ $race->name }} @elseif(old('name')) {{ old('name') }} @endif" placeholder='(optional)'>
        </div>
    </div>
    <!-- DISTANCE-->
    <div class="form-group">
        <label for="distance" class="col-sm-2 control-label">Distance</label>
        <div class="col-sm-10">
            <input type="number" name="distance" class="form-control" id="distance" value="@if(isset($race->distance)) {{ $race->distance }} @elseif(old('distance')) {{ old('distance') }} @endif">
        </div>
    </div>

    <!-- DISTANCE UNITS-->
    <div class="form-group">
        <label for="distance_units" class="col-sm-2 control-label">Units</label>
        <div class="col-sm-10">
            <input type="text" name="distance_units" class="form-control" id="distance_units" value="@if(isset($race->distance_units)) {{ $race->distance_units }} @elseif(old('distance_units')) {{ old('distance_units') }} @endif">
        </div>
    </div>
    <!-- START TIME -->
    <div class="form-group">
        <label for="start_time" class="col-sm-2 control-label">Start Time</label>
        <div class="col-sm-10">
            <input type="datetime-local" name="start_time" class="form-control" id="start_time" placeholder="" value="@if(isset($race->start_time)) {{ $race->start_time }} @elseif(old('start_time ')) {{ old('start_time') }} @endif "/>
        </div>
    </div>