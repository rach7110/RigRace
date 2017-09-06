    <!-- BOATS -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Boats</h3>
        </div>

        <div class="panel-body">
            @if(count($boats) == 0)
                <p>No competing boats. Click 'Add Boat' to start scoring.</p>
            @else
                <div class="row">
                    <div class="col-md-2">Boat Name</div>
                    <div class="col-md-2">Boat Rating</div>
                    <div class="col-md-2">Skipper First Name</div>
                    <div class="col-md-2">Skipper Last Name</div>
                </div>
                @foreach ($boats as $boat)
                    <div class="row">
                        <div class="col-md-2">{{ $boat->boatname }}</div>
                        <div class="col-md-2">{{ $boat->rating}}</div>
                        <div class="col-md-2">{{ $boat->skipper_first}}</div>
                        <div class="col-md-2">{{ $boat->skipper_last}}</div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>