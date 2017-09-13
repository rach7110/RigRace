    <!-- BOATS -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Boats</h3>
        </div>

        <div class="panel-body">
         <!-- NEW BOAT -->
            <div class="pull-right right-margin">
                <a href="{{ route('results.boats.create', $result->id) }}">
                    <button class="btn btn-primary">+ Boat</button>
                </a>
            </div>
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
                        <!-- SHOW ENVENT NAME ON BOATS INDEX PAGE: (TESTING) -->
                        @if (Request::is('boats'))
                            <div class="col-md-2"><h6>{{ $boat->result->eventname }}</h6></div>
                        @endif
                        <!-- ONLY SHOW 'EDIT' & 'DELETE' FOR BOATS ON A RESULT PAGE -->
                        @if (Request::is('results/*'))
                            <!-- EDIT -->
                            <div class="col-md-1"><a href="{{ route('boats.edit', $boat->id)}}">Edit</a></div>
                            <!-- DELETE -->
                            <!-- <div class="col-md-1">Delete</div> -->
                            <form method="post" action="{{ route('boats.destroy', $boat->id) }}">
                                {{ csrf_field() }}
                                <button class="btn btn-danger btn-link" type="submit" style="padding-top: 0px; border-top-width: 0px;">Delete</button>
                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                        @endif
                    </div>
                @endforeach
            @endif
        </div>
    </div>