    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <!--  <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div> -->
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            @if (Auth::user()->role == 'admin')
                <div class="form-group">
                    Menu Admin
                </div>
            @elseif (Auth::user()->role == 'marketing')
                <div class="form-group">
                    Menu Marketing
                </div>
            @endif

        </form>
        <ul class="nav menu">
            @php $act = Session::get('menu'); @endphp
            @if (Auth::user()->role == 'admin')
                <li class="{{ $act == 'home' ? 'active' : '' }}"><a href="{{ url('home') }}"><em
                            class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
                <li class="{{ $act == 'banks' ? 'active' : '' }}"><a href="{{ url('banks') }}"><em
                            class="fa fa-bank">&nbsp;</em> Bank </a></li>
                <li class="{{ $act == 'whatsapp' ? 'active' : '' }}"><a href="{{ url('whatsapp') }}"><em
                            class="fa fa-phone-square">&nbsp;</em> whatsapp </a></li>
                <li class="{{ $act == 'cars' ? 'active' : '' }}"><a href="{{ url('cars') }}"><em
                            class="fa fa-car">&nbsp;</em> Car </a></li>
                <li class="{{ $act == 'vendors' ? 'active' : '' }}"><a href="{{ url('vendors') }}"><em
                            class="fa fa-industry">&nbsp;</em> Vendor car</a></li>
                <li class="{{ $act == 'transactions' ? 'active' : '' }}"><a href="{{ url('transactions') }}"><em
                            class="fa fa-exchange">&nbsp;</em> Order</a></li>
                <li class="{{ $act == 'return' ? 'active' : '' }}"><a href="{{ url('transaction_return') }}"><em
                            class="fa fa-undo">&nbsp;</em> Out Car</a></li>

                <li class="parent {{ $act == 'user_admin' ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#sub-item-1">
                        <em class="fa fa-users">&nbsp;</em> User Menu <span data-toggle="collapse" href="#sub-item-1"
                            class="icon pull-right"><em class="fa fa-plus"></em></span>
                    </a>
                    <ul class="children collapse" id="sub-item-1">
                        <li><a class="{{ $act == 'user_admin' ? 'active' : '' }}" href="{{ url('users') }}">
                                <span class="fa fa-arrow-right">&nbsp;</span> Dealer
                            </a></li>
                        <li><a class="{{ $act == 'user_customer' ? 'active' : '' }}" href="{{ url('customers') }}">
                                <span class="fa fa-arrow-right">&nbsp;</span> Customer
                            </a></li>
                    </ul>
                </li>
                <li class="{{ $act == 'return' ? 'active' : '' }}"><a href="{{ route('about.adm') }}"><em
                            class="fa fa-envelope">&nbsp;</em> About-Us</a></li>

                            <li class="{{ $act == 'return' ? 'active' : '' }}"><a href="{{ route('banner') }}"><em
                                class="fa fa-envelope">&nbsp;</em> Banner</a></li>
                            
                                <li class="{{ $act == 'return' ? 'active' : '' }}"><a href="{{ route('bannerhome') }}"><em
                                    class="fa fa-envelope">&nbsp;</em> Banner Home Page</a></li>

                                    <li class="{{ $act == 'return' ? 'active' : '' }}"><a href="{{ route('banneraboutus') }}"><em
                                        class="fa fa-envelope">&nbsp;</em> Banner About us</a></li>    

                                        <li class="{{ $act == 'return' ? 'active' : '' }}"><a href="{{ route('bannercontact') }}"><em
                                            class="fa fa-envelope">&nbsp;</em> Banner Contact</a></li>     
                            
                         <li class="{{ $act == 'return' ? 'active' : '' }}"><a href="{{ route('leaderboard.admin') }}"><em
                                    class="fa fa-envelope">&nbsp;</em> Leaderboard</a></li>
                                    <li class="{{ $act == 'return' ? 'active' : '' }}"><a href="{{ route('add.meta') }}"><em
                                        class="fa fa-envelope">&nbsp;</em> Meta Data</a></li>            
                            
            @elseif (Auth::user()->role == 'marketing')
                <li class="{{ $act == 'cars' ? 'active' : '' }}"><a href="{{ url('cars') }}"><em
                            class="fa fa-car">&nbsp;</em> Car </a></li>
            <li class="{{ $act == 'leaderboard' ? 'active' : '' }}"><a href="{{ route('leaderboard.index') }}"><em
                    class="fa fa-car">&nbsp;</em> Leaderboard </a></li>
            @endif

            <li>
                <form id="logout-form" action="{{ url('log_out_admin') }}" method="POST" style="display: none;">@csrf
                </form>
                <a style="cursor: pointer;"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <em class="fa fa-power-off">&nbsp;
                    </em>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <!--/.sidebar-->
