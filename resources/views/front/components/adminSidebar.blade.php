<div class="col-md-4 col-lg-3">
    <div class="db-nav">
        <div class="db-nav-pro">
            <div class="head-pro">
                <b>{{$LOGGED_IN_PANDIT->name}}</b><br>
                <h4>{{$LOGGED_IN_PANDIT->email}}</h4>
                
            </div>
        </div>

        <div class="db-nav-list">
            <ul>
                <li><a href="{{route('pandit.dashboard')}}" class="act"><i class="fa fa-tachometer"
                            aria-hidden="true"></i>Dashboard</a></li>
                <li><a href="{{route('pandit.profiles')}}"><i class="fa fa-male" aria-hidden="true"></i>Profile</a>
                </li>
                {{-- <li><a href="user-interests.html"><i class="fa fa-handshake-o"
                            aria-hidden="true"></i>Interests</a></li>
                <li><a href="user-chat.html"><i class="fa fa-commenting-o" aria-hidden="true"></i>Chat
                        list</a></li>
                <li><a href="user-plan.html"><i class="fa fa-money" aria-hidden="true"></i>Plan</a></li>
                <li><a href="user-setting.html"><i class="fa fa-cog" aria-hidden="true"></i>Setting</a>
                </li> --}}
                <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</a></li>
            </ul>
        </div>
    </div>
</div>