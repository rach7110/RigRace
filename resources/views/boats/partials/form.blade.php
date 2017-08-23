    {{ csrf_field() }}
    <!-- BOAT NAME -->
    <div class="form-group">
        <label for="boatname" class="col-sm-2 control-label">Boat Name</label>
        <div class="col-sm-10">
            <input type="text" name="boatname" id="boatname" class="form-control" placeholder="" value="@if(isset($boat)) {{ $boat->boatname }} @else {{ old('boatname') }} @endif ">
        </div>
    </div>
    <!-- BOAT RATING -->
    <div class="form-group">
        <label for="rating" class="col-sm-2 control-label">Boat Rating</label>
        <div class="col-sm-10">
            <input type="number" name="rating" class="form-control" id="rating" value="@if(isset($boat)){{$boat->rating}}@else {{ old('rating') }} @endif">
        </div>
    </div>
    <!-- SKIPPER -->
    <div class="form-group">
        <label for="skipper_first" class="col-sm-2 control-label">Skipper First Name</label>
        <div class="col-sm-10">
            <input type="text" name="skipper_first" class="form-control" id="skipper_first" placeholder="" value="@if(isset($boat)) {{ $boat->skipper_first }} @else {{ old('skipper_first') }} @endif "/>
        </div>
    </div>
    <div class="form-group">
        <label for="skipper_last" class="col-sm-2 control-label">Skipper Last Name</label>
        <div class="col-sm-10">
            <input type="text" name="skipper_last" class="form-control" id="skipper_last" placeholder="" value="@if(isset($boat)) {{ $boat->skipper_last }} @else {{ old('skipper_last') }} @endif "/>
        </div>
    </div>

    