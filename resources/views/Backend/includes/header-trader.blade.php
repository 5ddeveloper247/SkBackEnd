<header>
    <div class="contain-fluid">
        <div id="nav">
            <nav class="ease">
                <ul id="lst">

                    <li><a href="{{url('/admin/users') }}">Admin Users</a></li>
                    <li><a href="{{ url('/admin/media/view') }}">Media</a></li>
                    <li><a href="{{ url('admin/property/listing') }}">Property Listings</a></li>
                </ul>
            </nav>
            <!-- 
            <form action="" method="POST">
                <input type="text" name="" id="" class="text_box" placeholder="Search here">
                <button type="submit"><img src="{{ asset('/images/icon-search.svg') }}" alt=""></button>
            </form> 
            -->
            {{-- <ul id="icon_btn">
                <li id="noti">
                    <a href="{{ url('trader/notifications.php') }}">
                        <img src="{{ asset('/images/icon-bell.svg') }}" alt="">
                    </a>
                </li>
            </ul> --}}
            <div id="pro_btn" class="drop_down">
                <div class="drop_btn">
                    <div class="ico">
                        <img src="{{ asset('/images/icon-user.svg') }}" alt="">
                    </div>
                    @auth
                    <div class="name">{{ Auth::user()->name }} <small>{{ Auth::user()->role }}</small></div>
                    @endauth
                </div>
                <div class="drop_cnt">
                    <ul class="drop_lst">
                        <li><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>

                        <li><a href="#">Settings</a></li>
                        <li><a href="{{ url('/admin/logout')}}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>