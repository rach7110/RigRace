    {{ csrf_field() }}
    <!-- BOAT NAME -->
    <div class="form-group">
        <label for="boatname" class="col-sm-2 control-label">Boat Name</label>
        <div class="col-sm-10">
            <input type="text" name="boatname" id="boatname" class="form-control" value="@if(isset($boat->boatname)) {{ $boat->boatname }} @elseif(old('boatname')) {{ old('boatname') }} @endif" placeholder="Blue Bayou" required>
        </div>
    </div>
    <!-- BOAT RATING -->
    <div class="form-group">
        <label for="rating" class="col-sm-2 control-label">Boat Rating</label>
        <div class="col-sm-10">
            <input type="number" name="rating" class="form-control" id="rating" value="@if(isset($boat->rating)){{ $boat->rating}}@elseif(old('rating')) {{ old('rating') }} @endif" placeholder="102">
        </div>
    </div>
    <!-- SKIPPER -->
    <div class="form-group">
        <label for="skipper_first" class="col-sm-2 control-label">Skipper First Name</label>
        <div class="col-sm-10">
            <input type="text" name="skipper_first" class="form-control" id="skipper_first" value="@if(isset($boat->skipper_first)) {{ $boat->skipper_first }} @elseif(old('skipper_first')) {{ old('skipper_first') }} @endif" placeholder="Kristen" />
        </div>
    </div>
    <div class="form-group">
        <label for="skipper_last" class="col-sm-2 control-label">Skipper Last Name</label>
        <div class="col-sm-10">
            <input type="text" name="skipper_last" class="form-control" id="skipper_last" value="@if(isset($boat->skipper_last)) {{ $boat->skipper_last }} @elseif(old('skipper_last')) {{ old('skipper_last') }} @endif" placeholder="Fasten" />

        </div>
    </div>

    